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

/**
 * Business logic for creating greeting messages.
 *
 * @package    block_greeting
 * @copyright  2026 maicon Rafael ferreira dos santos
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_greeting\local;

use stdClass;

/**
 * Builds greeting messages.
 */
final class greeting_text {
    /**
     * Build a greeting message for a person name.
     *
     * @param string $name The display name to greet.
     * @return string The formatted greeting.
     */
    public function for_name(string $name): string {
        $cleanname = trim($name);
        if ($cleanname === '') {
            $cleanname = 'there';
        }

        return 'Hello, ' . $cleanname . '!';
    }

    /**
     * Build a greeting message for a Moodle user object.
     *
     * @param stdClass $user The user record.
     * @return string The formatted greeting.
     */
    public function for_user(stdClass $user): string {
        $name = trim((string)($user->firstname ?? $user->first_name ?? $user->name ?? ''));
        return $this->for_name($name);
    }
}
