<?php
namespace GusApi;

interface RegonConstantsInterface
{
    const BASE_WSDL_URL_TEST = 'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/wsdl/UslugaBIRzewnPubl.xsd';
    const BASE_WSDL_ADDRESS_TEST =  'https://Wyszukiwarkaregontest.stat.gov.pl/wsBIR/UslugaBIRzewnPubl.svc';

    const BASE_WSDL_URL = 'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/wsdl/UslugaBIRzewnPubl.xsd';
    const BASE_WSDL_ADDRESS =  'https://wyszukiwarkaregon.stat.gov.pl/wsBIR/UslugaBIRzewnPubl.svc';

    const PARAM_USER_KEY = 'pKluczUzytkownika';
    const PARAM_SESSION_ID = 'pIdentyfikatorSesji';
    const PARAM_CAPTCHA = 'pCaptcha';
    const PARAM_SEARCH = 'pParametryWyszukiwania';
    const PARAM_REGOM = 'pRegon';
    const PARAM_REPORT_NAME = 'pNazwaRaportu';
    const PARAM_PARAM_NAME = 'pNazwaParametru';

    const SEARCH_TYPE_NIP  = 'Nip';
    const SEARCH_TYPE_KRS  = 'Krs';
    const SEARCH_TYPE_REGON = 'Regon';
    const SEARCH_TYPE_REGONS9 = 'Regony9zn';
    const SEARCH_TYPE_REGONS14 = 'Regony14zn';

    const PARAM_STATUS_DATE_STATE = 'StanDanych';
    const PARAM_MESSAGE_CODE = 'KomunikatKod';
    const PARAM_MESSAGE = 'KomunikatTresc';
    const PARAM_SESSION_STATUS = 'StatusSesji';
    const PARAM_SERVICE_STATUS = 'StatusUslugi';
    const PARAM_SERVICE_MESSAGE = 'KomunikatUslugi';

    const SERVICE_UNAVAILABLE = 0;
    const SERVICE_AVAILABLE = 1;
    const SERVICE_TECHNICAL_BREAK = 2;

}