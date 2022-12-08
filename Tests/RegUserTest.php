<?php

use PHPUnit\Framework\TestCase;
require_once 'classes/RegUser.php';

class RegUserTest extends TestCase
{

    public function testFormatCheck()
    {
        $regUser = new RegUser('Иван', 'Иванов', 'Иванович', '+375291080530', '1234567891MP10', '25', 'Центральный', 'Пушкина', '5', '10', '102', '1234', '1234');
        $this->assertEquals(true, $regUser->formatCheck('Иванов'));
    }

    public function testLenCheck()
    {
        $regUser = new RegUser('Иван', 'Иванов', 'Иванович', '+375291080530', '1234567891MP10', '25', 'Центральный', 'Пушкина', '5', '10', '102', '1234', '1234');
        $this->assertEquals(true, $regUser->lenCheck('Иванов'));
    }

    public function testPhoneNumberCheck()
    {

        $regUser = new RegUser('Иван', 'Иванов', 'Иванович', '+375291080530', '1234567891MP10', '25', 'Центральный', 'Пушкина', '5', '10', '102', '1234', '1234');
        $this->assertEquals(true, $regUser->phoneNumberCheck());
    }

    public function testIdFormatCheck()
    {
        $regUser = new RegUser('Иван', 'Иванов', 'Иванович', '+375291080530', '1234567891MP10', '25', 'Центральный', 'Пушкина', '5', '10', '102', '1234', '1234');
        $this->assertEquals(true, $regUser->idFormatCheck());
    }

    public function testIdLenCheck()
    {
        $regUser = new RegUser('Иван', 'Иванов', 'Иванович', '+375291080530', '1234567891MP10', '25', 'Центральный', 'Пушкина', '5', '10', '102', '1234', '1234');
        $this->assertEquals(true, $regUser->idLenCheck());
    }

    public function testComparePasswords()
    {
        $regUser = new RegUser('Иван', 'Иванов', 'Иванович', '+375291080530', '1234567891MP10', '25', 'Центральный', 'Пушкина', '5', '10', '102', '1234', '1234');
        $this->assertEquals(true, $regUser->comparePasswords());
    }

}

?>
