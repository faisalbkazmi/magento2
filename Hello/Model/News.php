    <?php
     
    namespace Excellence\Hello\Model;
     
    use Magento\Framework\Model\AbstractModel;
     
    class News extends AbstractModel
    {
        /**
         * Define resource model
         */
        protected function _construct()
        {
            $this->_init('Excellence\Hello\Model\Resource\News');
        }
    }