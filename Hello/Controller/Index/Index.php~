    <?php
     
    namespace Excellence\Hello\Controller\Index;
     
    use Magento\Framework\App\Action\Action;
    use Magento\Framework\App\Action\Context;
    use Tutorial\SimpleNews\Model\NewsFactory;
     
    class Index extends Action
    {
        
        protected $_modelNewsFactory;
     
        
        public function __construct(
            Context $context,
            NewsFactory $modelNewsFactory
        ) {
            parent::__construct($context);
            $this->_modelNewsFactory = $modelNewsFactory;
        }
     
        public function execute()
        {
            $newsModel = $this->_modelNewsFactory->create();
     
       
            $item = $newsModel->load(1);
            var_dump($item->getData());
     
            // Get news collection
            $newsCollection = $newsModel->getCollection();
            // Load all data of collection
            var_dump($newsCollection->getData());
        }
    }
