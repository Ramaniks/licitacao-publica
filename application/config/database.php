<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'postgresql',
		'connection' => array(
			/**
			 * There are two ways to define a connection for PostgreSQL:
			 *
			 * 1. Full connection string passed directly to pg_connect()
			 *
			 * string   info
			 *
			 * 2. Connection parameters:
			 *
			 * string   hostname    NULL to use default domain socket
			 * integer  port        NULL to use the default port
			 * string   username
			 * string   password
			 * string   database
			 * boolean  persistent
			 * mixed    ssl         TRUE to require, FALSE to disable, or 'prefer' to negotiate
			 *
			 * @link http://www.postgresql.org/docs/current/static/libpq-connect.html
			 */
			'hostname'   => 'localhost',
			'username'   => 'neumann_forex2ms',
			'password'   => 'Forex2MetaStock',
			'persistent' => FALSE,
			'database'   => 'neumann_forex2ms',
		),
		'primary_key'  => '',   // Column to return from INSERT queries, see #2188 and #2273
		'schema'       => '',
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
);