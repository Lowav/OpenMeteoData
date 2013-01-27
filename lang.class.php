<?php
class lang extends settings
{
	public $_lang_active = 'en';
	public $_lang_path = 'languages/';
	
	public function setLangActive($lang, $method)
	{
		if($method = 'get' && is_dir($this->_lang_path.$lang) && in_array($lang, $this->langs_array))
		{
			$open_dir = opendir($this->_lang_path.$lang); // ouverture du dossier en fonction de la langue
			while($file = readdir($open_dir))
			{
				if(is_readable($this->_lang_path.$lang.'/'.$file) && strrchr($file, '.') == '.ini')
				{
					$file_parsed = parse_ini_file($this->_lang_path.$lang.'/'.$file); // transfert des occurences du fichier ini vers un tableau
					foreach($file_parsed as $key => $value)
					{
						define($key, $value);
					}
				}
			}
			setcookie('lang', $lang);
			$this->_lang_active = $lang;
			// $_SESSION['lang'] = $lang;
		}
		elseif($method = 'cookie' && is_dir($this->_lang_path.$lang) && in_array($lang, $this->langs_array))
		{
			$open_dir = opendir($this->_lang_path.$lang); // ouverture du dossier en fonction de la langue
			while($file = readdir($open_dir))
			{
				if(is_readable($this->_lang_path.$lang.'/'.$file) && strrchr($file, '.') == '.ini')
				{
					$file_parsed = parse_ini_file($this->_lang_path.$lang.'/'.$file); // transfert des occurences du fichier ini vers un tableau
					foreach($file_parsed as $key => $value)
					{
						define($key, $value);
					}
				}
			}
			$this->_lang_active = $lang;
			// $_SESSION['lang'] = $lang;
		}
		else
		{
			$open_dir = opendir($this->_lang_path.$this->default_lang); // ouverture du dossier en fonction de la langue
			while($file = readdir($open_dir))
			{
				if(is_readable($this->_lang_path.$this->default_lang.'/'.$file) && strrchr($file, '.') == '.ini')
				{
					$file_parsed = parse_ini_file($this->_lang_path.$this->default_lang.'/'.$file); // transfert des occurences du fichier ini vers un tableau
					foreach($file_parsed as $key => $value)
					{
						define($key, $value);
					}
				}
			}
		}
	}
	
	public function getLangActive()
	{
		return $this->_lang_active;
	}
}
?>