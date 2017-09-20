<?php
    /**
     * @name WorkingWithDirectories
     * @Статический класс для работы с корневыми 
     * каталогами.
     *
     * PHP version 5
     *
     * @category  PHP
     * @package   none
     * @author    Gleb An <An_gv@es.irkutskenergo.ru>
     * @date      19.09.2017
     */
    class WorkingWithDirectories{

        /**
         * getArrayFiles
         * 
         * Рекурсивный обход каталога для дальнейшей записи
         * всех найденных файлов в отдельные пути (массивы)
         *
         * @param string $pathDir
         *
         * @return array
         */
        public static function getArrayFiles($pathDir)
        {
            $numberCutPosition = strripos($pathDir, '\\');
            if($numberCutPosition)
            {
                $numberCutPosition++;
            }
            
            $arrayPath = array();
            $arrayContainsAllInnerStructureCurrentDirectory = 
                    new RecursiveDirectoryIterator($pathDir);

            foreach (new RecursiveIteratorIterator(
                    $arrayContainsAllInnerStructureCurrentDirectory) 
                    as $unknownPath)
            {
                $relativePath = substr($unknownPath->getPathname(), 
                        $numberCutPosition);
                array_merge($arrayPath, self::reorganizationArray($relativePath, 
                        ($unknownPath->isFile() ? true : false))
                    );

            }
            return $arrayPath;
        } //end getArrayFiles()

        public static function getRelativePath()
        {
            
        }
        
        /**
         * reorganizationArray
         * 
         * Получение ассоциативного вложенного массива с ключами, 
         * которые состоят из каталогов /dir_1/dir_2/.../dir_n/file1
         * В случае если путь не содержит файл, 
         * то функция вернет вложенный массив с пустым элементом
         * 
         * @param type $arrayPath 
         * @param type $pathToFile
         * @param type $isFile
         * @return type
         */
        private static function reorganizationArray(
                $pathToFile, $isFile)
        {

            $subDirs = explode('\\', $pathToFile);
//            print_r($pathToFile);
            $subDirs = self::deleteSystemSubDirsSymbols($subDirs);

            $arrayPath = array();

            if ($isFile)
            {
                $nameFile = array_pop($subDirs);
            }
            $changeArray = &$arrayPath;
            foreach($subDirs as $key => $dir)
            {
                $changeArray[$dir] = NULL;
                $changeArray = &$changeArray[$dir];
            }
            if($isFile)
            {
                $changeArray = $nameFile;
            }
            print_r($pathToFile);
            echo "<br/>";
            print_r($arrayPath);
            echo "<br/>";
            return $arrayPath;
        } //end reorganizationArray()
        
        /**
         * 
         * @param type $array
         * @return type
         */
        private static function deleteSystemSubDirsSymbols($array)
        {
            return array_diff($array, array(".", ".."));
        } // end deleteSystemSubDirsSymbols()
    }
?>