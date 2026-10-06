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
 * Greeting block module.
 *
 * @module     block_greeting/greeting
 * @copyright  2026 maicon Rafael ferreira dos santos
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define([], function() {
    'use strict';

    /**
     * Initialize the greeting block interactions.
     *
     * @param {Object} config Optional runtime configuration.
     * @returns {void}
     */
    const init = function(config = {}) {
        const blocks = document.querySelectorAll('.block_greeting');

        blocks.forEach(function(block) {
            const messageElement = block.querySelector('.block_greeting__message');
            if (!messageElement) {
                return;
            }

            const defaultMessage = config.defaultmessage || 'Hello, there!';
            if (!messageElement.textContent || messageElement.textContent.trim() === '') {
                messageElement.textContent = defaultMessage;
            }
        });
    };

    return {
        init: init,
    };
});
