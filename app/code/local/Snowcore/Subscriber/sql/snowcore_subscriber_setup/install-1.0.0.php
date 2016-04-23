<?php
// Add Country code column to newsletter subscriber table
$this->getConnection()->addColumn($this->getTable('newsletter/subscriber'), 'country_code', 'varchar(2) null');