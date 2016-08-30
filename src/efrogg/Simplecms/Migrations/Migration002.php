<?php
/**
 * Created by PhpStorm.
 * User: raph
 * Date: 30/08/16
 * Time: 06:03
 */
namespace efrogg\Simplecms\Migrations;

use efrogg\Db\Migration\ColumnType;
use efrogg\Db\Migration\Key;

class Migration002 extends \efrogg\Db\Migration\Migration {

    public function up()
    {
        echo "up 002";
        $this -> table("cms_page")
            -> addColumn("test",
                new ColumnType(ColumnType::TYPE_VARCHAR,255,ColumnType::NOT_NULL,"DEFAULT ''",'','label'),
                new Key(Key::UNIQUE));
    }

    public function down()
    {
        $this -> table("cms_page")
            -> removeColumn("test");
        // TODO: Implement down() method.
        echo "down 002";
    }
}