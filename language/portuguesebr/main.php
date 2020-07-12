<?php
//  ------------------------------------------------------------------------ //
//  Author: Designburo.nl (sales@designburo.nl)                              //
//  http://www.designburo.nl                                                 //
//  Project: Xurl                                                            //
//  Copyright (c) 2009 by Designburo.nl This material may be distributed     //
//  only subject to the terms and conditions set forth in the                //
//  Open Public License, v1.0 or later.                                      //
//  https://fedoraproject.org/wiki/Licensing/Open_Public_License             //
//  ------------------------------------------------------------------------ //
define('_XURL_SUBMIT','Abreviar');
define('_XURL_SANITIZE','<br />V�rias URLs: <br />(1 por linha)');
define('_XURL_S_SUBMIT','Abreviar');
define('_XURL_WRONG_URL','A URL que voc� forneceu, n�o � uma URL v�lida.');

// admin section
define('_AM_XURL_TAB1','Sobre');
define('_AM_XURL_TAB1_HEAD','Bem-vindo ao Xurl');
define('_AM_XURL_TAB1_FOOT1','Xurl faz parte da ');
define('_AM_XURL_TAB1_FOOT2','linha de produtos');
define('_AM_XURL_TAB2','Configura��es');
define('_AM_XURL_TAB2_HEAD','<h2>Configura��es do Xurl</h2>
<BR />Tenha certeza que todas as configura��es est�o corretas.<BR />Precisamos das configura��es Banco de Dados (MySQL), e redirecionamento de pessoas que clicam em um link e n�o s�o usu�rios registrados de seu site. Sem as informa��es Banco de Dados (MySQL), o XOOPS n�o consegue verificar se um usu�rio est� registrado.
<BR />As configura��es do Banco de Dados (MySQL) deve estar certas, as outras configura��es s�o provavelmente as que voc� precisar alterar.');
define('_AM_XURL_TAB2_HEAD2','<b>Configura��o</b>');

define('_AM_XURL_UPAGE','Ir para p�gina do Xurl');
//tab1
define('_AM_XURL_VERSION','Vers�o:');
define('_AM_XURL_DESC','Descri��o:');
define('_AM_XURL_AUTHOR','Autor:');
define('_AM_XURL_LCNSE','Licen�a:');
define('_AM_XURL_STATUS','Status:');
define('_AM_XURL_RELEASED','Liberado:');

//tab2
define('_AM_XURL_SET_TABLEH1','Nome');
define('_AM_XURL_SET_TABLEH2','Valor');
define('_AM_XURL_SET_TABLEH3','Descri��o');
define('_AM_XURL_SET_FOOTER','�ltima atualiza��o: ');
define('_AM_XURL_SET_FOOTER_ERR','N�o � poss�vel gravar as configura��es no arquivo. Por favor, certifique-se que tem a correta permiss�o de escrita(CHMOD-777) para o arquivo!');

define('_AM_XURL_YES','Sim');
define('_AM_XURL_NO','N�o');
define('_AM_XURL_SET_SQLHOST','Servidor MYSQL');
define('_AM_XURL_SET_SQLHOST_D','URL do servidor do Banco de Dados');
define('_AM_XURL_SET_SQLUSR','Usu�rio do MYSQL');
define('_AM_XURL_SET_SQLUSR_D','Nome de Usu�rio para acesso o Banco de Dados');
define('_AM_XURL_SET_SQLPASS','Senha MYSQL');
define('_AM_XURL_SET_SQLPASS_D','Senha de acesso para Banco de Dados');
define('_AM_XURL_SET_SQLDB','Nome MYSQL');
define('_AM_XURL_SET_SQLDB_D','Nome de acesso para Banco de Dados');
define('_AM_XURL_SET_SQLTBLE','Xurl Tabela MYSQL');
define('_AM_XURL_SET_SQLTBLE_D','Coloque a nome da tabela do Xurl. (incluindo o prefixo do XOOPS)');
define('_AM_XURL_SET_BASE','URL Direcionar');
define('_AM_XURL_SET_BASE_D','Url para ser direcionado, exemplo http://www.xoops.org/. N�o esque�a a barra no final ');
define('_AM_XURL_SET_ERR','URL para error');
define('_AM_XURL_SET_ERR_D','Se uma URL solicitado abreviada n�o exister, vai ser direcionado para esta URL.');
define('_AM_XURL_SET_RESTRICT','Restringir acesso?');
define('_AM_XURL_SET_RESTRICT_D','Quando definido SIM, apenas os utilizadores registados do seu site pode usar as URLs abreviadas.');
define('_AM_XURL_SET_RESTR_R','URL para direcionar restrin��o');
define('_AM_XURL_SET_RESTR_R_D','Se o acesso restrito estiver ativado, o visitante n�o registado vai para esta URL (por exemplo, se um usu�rio clica em uma URL abreviada, mas o acesso Restrito estiver definida como SIM, ele ser� encaminhado para esta URL). Tenha certeza que esta URL � permitido o acesso a utilizadores registados (por exemplo usu�rios an�nimos).');
define('_AM_XURL_SET_SAVE','Salvar configura��es');

// Added version 1.1
define('_AM_XURL_TAB3','Est�tica');
define('_AM_XURL_TAB4','Ajuda');
define('_XURL_INDEX_TEXT','<h1>Xurl</h1>Diminui��o de URLs para por exemplo no Twitter<BR />Neste caso, o 2lk.nl � um prestador de servi�os para abrevia��o de URLs.<BR />Qualquer um registrado no EasyTCPtransfer pode usar este!<BR /><BR />');
define('_AM_XURL_STAT_C1','Key');
define('_AM_XURL_STAT_C2','URL');
define('_AM_XURL_STAT_C3','Us�ario');
define('_AM_XURL_STAT_C4','Clicks');
define('_AM_XURL_STAT_INTRO1','Temos ');
define('_AM_XURL_STAT_INTRO2','URLs abreviadas em nosso Banco de Dados.');
define('_AM_XURL_STAT_INTRO3','Mostrando registros ');
define('_AM_XURL_STAT_INTRO4','Clique em um nome na columa para classificar a posi��o, clique no �cones ascendente e descendente para este posicionar-los e clique em um nome de usu�rio para mostrar a partir apenas desse usu�rio.');
define('_AM_XURL_STAT_INTRO5','Mostrando filtro do Xurls para este usu�rio: ');
define('_AM_XURL_STAT_INTRO6','Clique aqui para mostrar todos os registros.');
define('_AM_XURL_STAT_NEXT','PR�XIMO >>>');
define('_AM_XURL_STAT_PREV','<<< ANTERIOR');



// End added version 1.1

?>
