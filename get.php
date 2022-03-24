<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'config.php';

function printLink($method, $title, $subdomain) {
    echo '<br>';
    echo "<a href='https://$subdomain.amocrm.ru/$method' target='_blank'>$title</a>";
    echo '<br>';
}

printLink('api/v4/leads/custom_fields', 'Список utm меток', $subdomain);
printLink('api/v4/users', 'Список пользователей', $subdomain);
printLink('api/v4/contacts/custom_fields', 'Список полей контакта', $subdomain);

echo '<br>';
echo "<a href='https://www.amocrm.ru/developers/content/crm_platform/custom-fields' target='_blank'>Документация</a>";
echo '<br>';