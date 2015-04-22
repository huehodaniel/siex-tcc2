<?php

/**
* Classe para dados específicos
*/
class Misc
{
	
	/**
	* Retorna array com mapeamento de siglas para nomes de estados
	*/
	public static function states() {
		return array(
			'AC' => 'Acre',
			'AL' => 'Alagoas',
			'AM' => 'Amazonas',
			'AP' => 'Amapá',
			'BA' => 'Bahia',
			'CE' => 'Ceará',
			'DF' => 'Distrito Federal',
			'ES' => 'Espírito Santo',
			'GO' => 'Goiás',
			'MA' => 'Maranhão',
			'MT' => 'Mato Grosso',
			'MS' => 'Mato Grosso do Sul',
			'MG' => 'Minas Gerais',
			'PA' => 'Pará',
			'PB' => 'Paraíba',
			'PR' => 'Paraná',
			'PE' => 'Pernambuco',
			'PI' => 'Piauí',
			'RJ' => 'Rio de Janeiro',
			'RN' => 'Rio Grande do Norte',
			'RO' => 'Rondônia',
			'RS' => 'Rio Grande do Sul',
			'RR' => 'Roraima',
			'SC' => 'Santa Catarina',
			'SE' => 'Sergipe',
			'SP' => 'São Paulo',
			'TO' => 'Tocantins'); 
	}

	/**
	* Retorna array contendo os campi da Universidade
	*/
	public static function campi() {
		return array(
			'Baixada Santista' => 'Baixada Santista',	
			'Diadema' => 'Diadema',
			'Guarulhos' => 'Guarulhos',
			'Osasco' => 'Osasco',
			'São Paulo - EPE' => 'São Paulo - EPE',
			'São Paulo - EPM' => 'São Paulo - EPM',
			'São José dos Campos' => 'São José dos Campos',
			'Reitoria' => 'Reitoria');
	}

	/**
	* Retorna array contendo as áreas temáticas
	*/
	public static function themes() {
		return array(
			'Comunicação' => 'Comunicação',
			'Cultura' => 'Cultura',
			'Direitos Humanos e Justiça' => 'Direitos Humanos e Justiça',
			'Educação' => 'Educação',
			'Meio Ambiente' => 'Meio Ambiente',
			'Saúde' => 'Saúde',
			'Tecnologia e Produção' => 'Tecnologia e Produção',
			'Trabalho' => 'Trabalho');
	}

	/**
	* Retorna array contendo os tipos de dados registrados e suas rotas
	*/
	public static function models() {
		return array(
			'/projects' => 'Projetos',
      '/programs' => 'Programas',
      '/courses' => 'Cursos',
      '/events' => 'Eventos');
	}
}