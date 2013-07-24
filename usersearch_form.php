<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Simple form for searching users
 *
 * @package     block_helpdesk
 * @copyright   2010 VLACS
 * @author      Jonathan Doane <jdoane@vlacs.org>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') or die("Direct access to this location is not allowed.");

require_once("$CFG->dirroot/blocks/helpdesk/lib.php");
require_once("$CFG->libdir/formslib.php");

class helpdesk_usersearch_form extends moodleform {
    function definition() {
        global $CFG;

        $mform =& $this->_form;

        $hidden_fields = array(
            'function',
            'returnurl',
            'paramname',
            'ticketid',
        );

        $mform->addElement('header', 'usersearch', get_string('search'));
        $mform->addElement('text', 'search', '', 'size="40"');
        $mform->addElement('submit', 'submitbutton', get_string('search'));

        foreach ($hidden_fields as $hf) {
            $mform->addElement('hidden', $hf);
        }
    }
}
