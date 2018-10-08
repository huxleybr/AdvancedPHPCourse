<?php

/**
 * Created by PhpStorm.
 * User: TD11
 * Date: 27/04/2017
 * Time: 13:37
 */
class WebServiceModel
{

    public function getCurrencyByCountry($country)
    {
        $client = new SoapClient("http://www.webservicex.net/country.asmx?WSDL");

        try
        {
            $currency = $client->GetCurrencyByCountry(array("CountryName" => $country));

            return $currency->GetCurrencyByCountryResult;

        } catch (Exception $ex)
        {
            return "<p>Error occured in getCurrencyByCountry";
        }
    }


    public function convert($temperature, $fromUnit, $toUnit)
    {
        try
        {
            //create an instance of soapclient
            $client = new SoapClient("http://www.webservicex.net/ConvertTemperature.asmx?WSDL");

            $convertResult = $client->ConvertTemp(array("Temperature" => $temperature, "FromUnit" => $fromUnit, "ToUnit" => $toUnit));

            return $convertResult->ConvertTempResult;
        }
        catch(Exception $ex)
        {
            return "<p>Error occured, please contact Admin</p>";
        }
    }

}