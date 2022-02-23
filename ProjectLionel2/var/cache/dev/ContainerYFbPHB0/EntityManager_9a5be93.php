<?php

namespace ContainerYFbPHB0;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder484ff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9503f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1e65b = [
        
    ];

    public function getConnection()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getConnection', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getMetadataFactory', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getExpressionBuilder', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'beginTransaction', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getCache', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'transactional', array('func' => $func), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'commit', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->commit();
    }

    public function rollback()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'rollback', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getClassMetadata', array('className' => $className), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'createQuery', array('dql' => $dql), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'createNamedQuery', array('name' => $name), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'createQueryBuilder', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'flush', array('entity' => $entity), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'clear', array('entityName' => $entityName), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->clear($entityName);
    }

    public function close()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'close', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->close();
    }

    public function persist($entity)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'persist', array('entity' => $entity), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'remove', array('entity' => $entity), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'refresh', array('entity' => $entity), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'detach', array('entity' => $entity), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'merge', array('entity' => $entity), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'contains', array('entity' => $entity), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getEventManager', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getConfiguration', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'isOpen', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getUnitOfWork', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getProxyFactory', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'initializeObject', array('obj' => $obj), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'getFilters', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'isFiltersStateClean', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'hasFilters', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return $this->valueHolder484ff->hasFilters();
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

        $instance->initializer9503f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder484ff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder484ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder484ff->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, '__get', ['name' => $name], $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        if (isset(self::$publicProperties1e65b[$name])) {
            return $this->valueHolder484ff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder484ff;

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

        $targetObject = $this->valueHolder484ff;
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
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder484ff;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder484ff;
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
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, '__isset', array('name' => $name), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder484ff;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder484ff;
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
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, '__unset', array('name' => $name), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder484ff;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder484ff;
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
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, '__clone', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        $this->valueHolder484ff = clone $this->valueHolder484ff;
    }

    public function __sleep()
    {
        $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, '__sleep', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;

        return array('valueHolder484ff');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9503f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9503f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9503f && ($this->initializer9503f->__invoke($valueHolder484ff, $this, 'initializeProxy', array(), $this->initializer9503f) || 1) && $this->valueHolder484ff = $valueHolder484ff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder484ff;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder484ff;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
