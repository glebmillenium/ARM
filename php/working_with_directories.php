<?php
	/**
	 * WorkingWithDirectories
	 * Статический класс для работы с корневыми 
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
		 * Рекурсивный обход каталога для дальнейшей записи
		 * всех найденных файлов в отдельные пути (массивы)
		 *
		 * @param string $pathDir
		 *
		 * @return array
		 */
		public static function getArrayFiles($pathDir)
		{
			$array_path = array();
			$dir = new RecursiveDirectoryIterator($pathDir);
			foreach (new RecursiveIteratorIterator($dir) as $val)
			{
				if ($val->isFile() === true)
				{
					$array_path[] = $val->getPathname();
				}
			}
			return $array_path;
		} //end getArrayFiles()
		
	}
?>