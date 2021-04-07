<?php

namespace ContainerEvYsrWa;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder16cd7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer76bb5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese56a1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getConnection', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getMetadataFactory', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getExpressionBuilder', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'beginTransaction', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getCache', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'transactional', array('func' => $func), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->transactional($func);
    }

    public function commit()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'commit', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->commit();
    }

    public function rollback()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'rollback', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getClassMetadata', array('className' => $className), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'createQuery', array('dql' => $dql), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'createNamedQuery', array('name' => $name), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'createQueryBuilder', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'flush', array('entity' => $entity), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'clear', array('entityName' => $entityName), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->clear($entityName);
    }

    public function close()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'close', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->close();
    }

    public function persist($entity)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'persist', array('entity' => $entity), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'remove', array('entity' => $entity), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'refresh', array('entity' => $entity), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'detach', array('entity' => $entity), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'merge', array('entity' => $entity), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'contains', array('entity' => $entity), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getEventManager', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getConfiguration', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'isOpen', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getUnitOfWork', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getProxyFactory', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'initializeObject', array('obj' => $obj), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'getFilters', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'isFiltersStateClean', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'hasFilters', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return $this->valueHolder16cd7->hasFilters();
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

        $instance->initializer76bb5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder16cd7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder16cd7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder16cd7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, '__get', ['name' => $name], $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        if (isset(self::$publicPropertiese56a1[$name])) {
            return $this->valueHolder16cd7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16cd7;

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

        $targetObject = $this->valueHolder16cd7;
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
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16cd7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16cd7;
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
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, '__isset', array('name' => $name), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16cd7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder16cd7;
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
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, '__unset', array('name' => $name), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16cd7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder16cd7;
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
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, '__clone', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        $this->valueHolder16cd7 = clone $this->valueHolder16cd7;
    }

    public function __sleep()
    {
        $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, '__sleep', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;

        return array('valueHolder16cd7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer76bb5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer76bb5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer76bb5 && ($this->initializer76bb5->__invoke($valueHolder16cd7, $this, 'initializeProxy', array(), $this->initializer76bb5) || 1) && $this->valueHolder16cd7 = $valueHolder16cd7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder16cd7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder16cd7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
