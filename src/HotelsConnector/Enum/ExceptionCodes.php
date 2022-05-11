<?php

namespace Bronevik\HotelsConnector\Enum;

class ExceptionCodes
{
    const INCORRECT_AUTH_PARAMS_CODE = 1000;
    const UNKNOWN_REQUEST_CODE       = 1001;
    const ACCESS_DENIED_CODE         = 1002;
    const UNKNOWN_CURRENCY_CODE      = 1003;
    const CAN_NOT_SAVE_ORDER_CODE    = 1004;
    const WRONG_LANGUAGE_CODE        = 1005;

    const UNKNOWN_SERVICE_TYPE_EXCEPTION            = 2000;
    const NOT_SPECIFIED_OFFER_CODE_CODE             = 2001;
    const COMMENT_TEXT_IS_EMPTY_CODE                = 2002;
    const INVALID_MEAL_ID_CODE                      = 2003;
    const INVALID_COUNT_OF_GUESTS_CODE              = 2004;
    const GUESTS_NOT_SPECIFIED_CODE                 = 2005;
    const INCORRECT_CHECKIN_OR_CHECKOUT_CODE        = 2006;
    const INVALID_ORDER_ID_CODE                     = 2007;
    const MAX_COUNT_ORDER_MORE_THAN_LIMIT_CODE      = 2008;
    const SERVICE_NOT_FOUND_CODE                    = 2009;
    const COUNT_OF_SERVICE_IDS_MORE_THAN_LIMIT_CODE = 2010;
    const ALL_PARAMS_SELECTED_CODE                  = 2011;
    const MAX_COUNT_OF_HOTEL_IDS_EXCEEDED_CODE      = 2012;
    const UNKNOWN_SKIP_ELEMENT_CODE                 = 2013;
    const INCORRECT_DATE_IN_SEARCH_OFFERS_CODE      = 2014;
    const WRONG_DATE_FORMAT_CODE                    = 2015;
    const DATE_IS__LESS_THAN_YESTERDAY_CODE         = 2016;
    const SEARCH_DURATION_IS_TOO_LONG_CODE          = 2017;
    const UNKNOWN_COMMENT_ID_CODE                   = 2018;
    const INCORRECT_ORDER_SERVICES_COUNT_CODE       = 2019;
    const NOT_SPECIFIED_SEARCH_ORDERS_CRITERIA_CODE = 2020;
    const NOT_FOUND_RECORD_ID_CODE                  = 2021;
    const COUNT_OF_MESSAGE_IDS_MORE_THAN_LIMIT_CODE = 2022;
    const INCORRECT_PAYMENT_CRITERIA_VALUE_CODE     = 2023;
    const COUNT_OF_OFFER_CODES_MORE_THAN_LIMIT_CODE = 2024;
    const WRONG_GEO_RADIUS_IN_SEARCH_CODE           = 2025;
    const INCORRECT_ADD_ELEMENT_VALUE_CODE          = 2026;
    const INCORRECT_SEARCH_CRITERIA_PARAM_CODE      = 2027;
    const NOT_SPECIFIED_REFERENCE_ID_CODE           = 2028;
    const INVALID_MEALS_ADD_ELEMENTS_CODE           = 2029;
    const COUNTRY_ID_NOT_SPECIFIED                  = 2030;
    const UNKNOWN_GUARANTEE_TYPE                    = 2031;
    const EMPTY_GUEST_INFO                          = 2032;
    const WRONG_CARD_DETAILS                        = 2033;
    const CVV_NOT_FILLED                            = 2034;
    const EMPTY_GUEST_CONTACTS                      = 2035;
    const EXPIRED_CLIENT_CARD                       = 2037;
    const NOT_INVOICES_AVAILABLE                    = 2038;
    const CITY_NOT_FOUND                            = 2040;
    const COUNT_PARAMS_LIMIT                        = 2041;
    const IMPOSSIBLE_CHILDREN_ACCOMMODATION         = 2043;

    const MEAL_IS_NOT_AVAILABLE_IN_OFFER_CODE  = 3000;
    const EARLY_ARRIVAL_IS_NOT_AVAILABLE_CODE  = 3001;
    const LATE_DEPARTURE_IS_NOT_AVAILABLE_CODE = 3002;
    const HOTEL_NOT_FOUND_CODE                 = 3003;

    const EXTRA_FIELD_IS_NOT_SPECIFIED_CODE = 4000;
    const EXTRA_FIELD_INCORRECT_VALUE_CODE  = 4001;
    const UNKNOWN_EXTRA_FIELD_CODE          = 4002;

    const INCORRECT_OFFER_CODE                          = 5000;
    const NO_LONGER_AVAILABLE_OFFER_CODE                = 5001;
    const SPECIFIED_VALUES_ARE_NOT_AVAILABLE_CODE       = 5002;
    const INCORRECT_CREATE_ORDER_WITH_CARD_DETAILS_CALL = 5003;
    const INCORRECT_CREATE_ORDER_CALL                   = 5004;

    const SELLING_PRICE_HAS_WRONG_FORMAT_CODE  = 6000;
    const CLIENT_SELLING_PRICE_DISABLED_CODE   = 6001;
    const SELLING_PRICE_NOT_WITHIN_LIMITS_CODE = 6002;
    const SELLING_PRICE_IS_ONLY_IN_RUSSIA_CODE = 6003;
}
