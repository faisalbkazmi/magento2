    <?php namespace Excellence\Hello\Setup;
     
    use Magento\Framework\Setup\InstallDataInterface;
    use Magento\Framework\Setup\ModuleDataSetupInterface;
    use Magento\Framework\Setup\ModuleContextInterface;
     
    class InstallData implements InstallDataInterface
    {
        public function install(
            ModuleDataSetupInterface $setup,
            ModuleContextInterface $context
        ) {
            $setup->startSetup();
     
            // Get tutorial_simplenews table
            $tableName = $setup->getTable('agent_info');
            // Check if the table already exists
            if ($setup->getConnection()->isTableExists($tableName) == true) {
                // Declare data
               $data = [
                        [
                            'id' => '1',
                            'name' => 'Faisal',
                            'email' => 'fbkazmi@gmail.com',
                            'message' => 'hello',
                            
                        ],
                        [
                            'id' => '2',
                            'name' => 'kazmi',
                            'email' => 'kazmi@gmail.com',
                            'message' =>'hell is back',
                            
                        ]
                    ];
     
                // Insert data to table
                foreach ($data as $item) {
                    $setup->getConnection()->insert($tableName, $item);
                }
            }
     
            $setup->endSetup();
        }
    }
