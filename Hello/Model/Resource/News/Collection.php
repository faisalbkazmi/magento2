    <?php
     
    namespace Excellence\Hello\Model\Resource\News;
     
    use Magento\Framework\Model\Resource\Db\Collection\AbstractCollection;
     
    class Collection extends AbstractCollection
    {
        /**
         * Define model & resource model
         */
        protected function _construct()
        {
            $this->_init(
                'Excellence\Hello\Model\News',
                'Excellence\Hello\Model\Resource\News'
            );
        }
    }