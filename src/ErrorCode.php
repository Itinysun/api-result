<?php

namespace Lp\ApiResult;

enum  ErrorCode:int
{
    case clientError=400;
    case needLogin=401;
    case noAccess=403;
    case notFound=404;
    case apiDisabled=405;
    case noKLongerAvailable=410;
    case overLimit=413;
    case overRange=416;
    case ServerError=500;
    case serverOverLoad=501;
    case serverMaintenance=502;
    case serverPending=503;
}