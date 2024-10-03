<?php
namespace CEvent;

use PHPUnit\Framework\TestCase;
use Bitrix\Main\Config\Option;

class AgentsOnCrontabTest extends TestCase
{
    public function testAgentsOptions()
    {
        $this->assertEquals(
            'N',
            Option::get("main", "agents_use_crontab", "N")
        );

        $this->assertEquals(
            'N',
            Option::get("main", "check_agents", "N")
        );
    }

    public function testConstants()
    {
        $this->assertTrue(
            (defined("BX_CRONTAB_SUPPORT") && BX_CRONTAB_SUPPORT)
        );
        $this->assertFalse(
            defined("BX_CRONTAB")
        );
    }

    public function testMailEventBulk()
    {
        $this->assertGreaterThanOrEqual(
            20,
            intval(Option::get("main", "mail_event_bulk", "5"))
        );
    }
}