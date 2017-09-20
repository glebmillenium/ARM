<?php
    require_once("not_standart_function.php");
    /**
     * @name WorkingWithDirectories
     *   Статический класс для работы с корневыми 
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
         *   Рекурсивный обход каталога для дальнейшей записи
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
                $arrayPath = array_merge_recursive($arrayPath, 
                        self::reorganizationArray($relativePath, 
                        ($unknownPath->isFile() ? true : false))
                    );

            }
            return $arrayPath;
        } //end getArrayFiles()
        
        /**
         * reorganizationArray
         * 
         *   Получение ассоциативного вложенного массива с ключами, 
         * которые состоят из каталогов /dir_1/dir_2/.../dir_n/file1
         * В случае если путь не содержит файл, 
         * то функция вернет вложенный массив с пустым элементом
         * 
         * @param array $arrayPath 
         * @param string $pathToFile
         * @param bool   $isFile
         * @return array
         */
        private static function reorganizationArray(
                $pathToFile, $isFile)
        {

            $subDirs = explode('\\', $pathToFile);
            $subDirs = self::deleteSystemSubDirsSymbols($subDirs);

            $arrayPath = array();

            if ($isFile)
            {
                $nameFile = array_pop($subDirs);
            }
            $changeArray = &$arrayPath;
            foreach($subDirs as $key => $dir)
            {
                $changeArray[$dir] = array();
                $changeArray = &$changeArray[$dir];
            }
            if($isFile)
            {
                $changeArray = $nameFile;
            }
            return $arrayPath;
        } //end reorganizationArray()
        
        /**
         * deleteSystemSubDirsSymbols
         * 
         * Удаляет системные символы: ".", ".." из массива
         *  
         * @param array $array Массив на обработку
         * @return array Обработанный массив
         */
        private static function deleteSystemSubDirsSymbols($array)
        {
            return array_diff($array, array(".", ".."));
        } // end deleteSystemSubDirsSymbols()
    }
?>