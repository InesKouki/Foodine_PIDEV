<?php

namespace App\EventSubscriber;

use App\Repository\PlanningRepository;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CalendarSubscriber implements EventSubscriberInterface
{
    private $planningRepository;
    private $router;

    public function __construct(
        PlanningRepository $planningRepository,
        UrlGeneratorInterface $router
    ) {
        $this->planningRepository = $planningRepository;
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar)
    {
        $start = $calendar->getStart();
        $end = $calendar->getEnd();
       // $filters = $calendar->getFilters();

        // Modify the query to fit to your entity and needs
        // Change booking.beginAt by your start date property
        $plannings = $this->planningRepository
            ->createQueryBuilder('planning')
            ->where('planning.date BETWEEN :start and :end OR planning.date BETWEEN :start and :end')
            ->setParameter('start', $start->format('Y-m-d H:i:s'))
            ->setParameter('end', $end->format('Y-m-d H:i:s'))
            ->getQuery()
            ->getResult()
        ;

        foreach ($plannings as $planning) {
            // this create the events with your data (here booking data) to fill calendar
            $planningEvent = new Event(
                $planning->getNom(),
                $planning->getDate(),
                $planning->getDate() // If the end date is null or not defined, a all day event is created.
            );

            /*
             * Add custom options to events
             *
             * For more information see: https://fullcalendar.io/docs/event-object
             * and: https://github.com/fullcalendar/fullcalendar/blob/master/src/core/options.ts
             */
        if($planning->getRecettes()->toArray()){
            $planningEvent->setOptions([
                'backgroundColor' => 'gray',
                'borderColor' => 'gray',
            ]);
        }else{ $planningEvent->setOptions([
            'backgroundColor' => 'green',
            'borderColor' => 'green',
        ]);}


            $planningEvent->addOption(
                'url',
                $this->router->generate('Calendrier', [
                    'id' => $planning->getId(),
                ])
            );


            // finally, add the event to the CalendarEvent to fill the calendar
            $calendar->addEvent($planningEvent);
        }
    }
}