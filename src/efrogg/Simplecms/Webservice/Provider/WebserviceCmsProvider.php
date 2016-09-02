<?php
namespace efrogg\Simplecms\Webservice\Provider;

use efrogg\Simplecms\Webservice\WebservicePage;
use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Silex\ControllerCollection;

class WebserviceCmsProvider implements ControllerProviderInterface
{

    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        /** @var ControllerCollection $controllers */
        $controllers = $app['controllers_factory'];

        // order (erp)
        $app["webservice.cms.page"] = function($app) {
            return new WebservicePage($app['db']);
        };
        $controllers->get("/cms/page", "webservice.cms.page:test");


        return $controllers;

    }
}