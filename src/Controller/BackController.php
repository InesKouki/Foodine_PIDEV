<?php

namespace App\Controller;

use App\Repository\EvenementRepository;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class BackController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(EvenementRepository $repo, ChartBuilderInterface $chartBuilder)
    {
        $events = $repo->findAll();

        $eventName = [];
        $eventCount = [];

        foreach ($events as $e){
            $eventName[] = $e->getName();
            $eventCount[] = count($e->getPromotions());
        }

        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);

        $chart->setData([
            'labels' => $eventName,
            'datasets' => [
                [
                    'backgroundColor' => 'rgba(225, 225, 225, 0.9)',
                    'borderColor' => 'rgb(225, 225, 225)',
                    'data' => $eventCount,
                ],
            ],
        ]);

        $chart->setOptions([
            'plugins' => [
                'legend' => ['display' => false],
                'title' => [
                    'display' => 'true',
                    'color' => '#262626',
                    'font' => [
                        'size' => '30px',
                        'family' => 'Roboto, sans-serif'
                    ],
                    'text' => 'LES PLUS ACTIFS EVENEMENTS'
                ]
            ],
            'scales' => [
                'y' => [
                    'ticks' => [
                        'color' => 'white',
                    ],
                    'min' => 0,
                    'max' => 10,
                ],
                'x' => [
                    'ticks' => [
                        'color' => 'white',
                    ]
                    ]
            ],
        ]);

        return $this->render('back/homeBack.html.twig', [
            'chart' => $chart
//          'eventName' => json_encode($eventName),
//          'eventCount' => json_encode($eventCount)
        ]);
    }

}
