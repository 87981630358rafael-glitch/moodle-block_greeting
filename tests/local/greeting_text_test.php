<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace block_greeting\tests\local;

use advanced_testcase;
use block_greeting\local\greeting_text;

/**
 * Unit tests for greeting_text.
 *
 * @covers \block_greeting\local\greeting_text
 */
final class greeting_text_test extends advanced_testcase {
    public function test_format_greeting_for_name(): void {
        $this->resetAfterTest();

        $greeting = new greeting_text();

        $this->assertSame('Hello, Alice!', $greeting->for_name('Alice'));
        $this->assertSame('Hello, there!', $greeting->for_name('   '));
    }
}
