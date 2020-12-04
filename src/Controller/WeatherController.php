<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController
{
    /**
     * @Route("/weather", name="weather")
     */
    public function index() : Response
    {
	return $this->render('weather/index.html.twig', [
            'controller_name' => 'WeatherController',
        ]);
    }

    /**
     * @Route("/weather/forecast", name="weather_forecast")
     */
    public function forecast() : Response
    {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$url = 'api.openweathermap.org/data/2.5/forecast?q=beauvais&appid=ffc178fbfcef501954c7f5c6360ae571';
	curl_setopt($ch, CURLOPT_URL,$url);
	$result=curl_exec($ch);
	curl_close($ch);

	$weatherForecastJson = json_decode($result);

	return $this->json($weatherForecastJson);
    }
}
