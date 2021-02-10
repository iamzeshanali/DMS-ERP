<?php declare(strict_types = 1);

namespace App;
use App\Domain\Entities\TodoItem;
use App\Infrastructure\Persistence\TodoItemMapper;
use Dms\Core\Persistence\Db\Mapping\Definition\Orm\OrmDefinition;
use Dms\Core\Persistence\Db\Mapping\Orm;
use Dms\Web\Laravel\Persistence\Db\DmsOrm;

/**
 * The application's orm.
 */
class AppOrm extends Orm
{
    /**
     * Defines the object mappers registered in the orm.
     *
     * @param OrmDefinition $orm
     *
     * @return void
     */
    protected function define(OrmDefinition $orm)
    {
        $orm->enableLazyLoading();

        $orm->encompass(DmsOrm::inDefaultNamespace());

        // TODO: Register your mappers...
        $orm->entities([
            TodoItem::class => TodoItemMapper::class
        ]);
    }
}