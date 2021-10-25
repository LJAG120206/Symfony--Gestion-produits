<?php

namespace ContainerS4s6p4W;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0b201 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd651f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties92385 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getConnection', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getMetadataFactory', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getExpressionBuilder', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'beginTransaction', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getCache', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'transactional', array('func' => $func), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'commit', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->commit();
    }

    public function rollback()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'rollback', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getClassMetadata', array('className' => $className), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'createQuery', array('dql' => $dql), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'createNamedQuery', array('name' => $name), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'createQueryBuilder', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'flush', array('entity' => $entity), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'clear', array('entityName' => $entityName), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->clear($entityName);
    }

    public function close()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'close', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->close();
    }

    public function persist($entity)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'persist', array('entity' => $entity), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'remove', array('entity' => $entity), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'refresh', array('entity' => $entity), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'detach', array('entity' => $entity), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'merge', array('entity' => $entity), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'contains', array('entity' => $entity), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getEventManager', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getConfiguration', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'isOpen', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getUnitOfWork', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getProxyFactory', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'initializeObject', array('obj' => $obj), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'getFilters', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'isFiltersStateClean', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'hasFilters', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return $this->valueHolder0b201->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd651f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0b201) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0b201 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0b201->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, '__get', ['name' => $name], $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        if (isset(self::$publicProperties92385[$name])) {
            return $this->valueHolder0b201->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b201;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0b201;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b201;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0b201;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, '__isset', array('name' => $name), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b201;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0b201;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, '__unset', array('name' => $name), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b201;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0b201;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, '__clone', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        $this->valueHolder0b201 = clone $this->valueHolder0b201;
    }

    public function __sleep()
    {
        $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, '__sleep', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;

        return array('valueHolder0b201');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd651f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd651f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd651f && ($this->initializerd651f->__invoke($valueHolder0b201, $this, 'initializeProxy', array(), $this->initializerd651f) || 1) && $this->valueHolder0b201 = $valueHolder0b201;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0b201;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0b201;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
