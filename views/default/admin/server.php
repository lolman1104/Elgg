<?php
/**
 * Server information
 */

echo elgg_view_module('inline', elgg_echo('admin:server:label:elgg'), elgg_view('admin/server/elgg'));

echo elgg_view_module('inline', elgg_echo('admin:server:label:web_server'), elgg_view('admin/server/web_server'));

echo elgg_view_module('inline', elgg_echo('admin:server:label:php'), elgg_view('admin/server/php'));

echo elgg_view_module('inline', elgg_echo('admin:server:label:memcache'), elgg_view('admin/server/memcache'));
