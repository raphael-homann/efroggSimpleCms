<?php
/**
 * Created by PhpStorm.
 * User: raph
 * Date: 02/09/16
 * Time: 10:03
 */

namespace efrogg\Simplecms\Webservice;


use efrogg\Db\Adapters\DbAdapter;
use efrogg\Webservice\WebserviceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class WebservicePage implements WebserviceInterface
{

    protected $db;

    /**
     * @return Response
     */
    public function setDb(DbAdapter $db)
    {
        $this->db = $db;
    }

    public function test() {
        return new JsonResponse(array("123","456"=>"789"));
    }
}