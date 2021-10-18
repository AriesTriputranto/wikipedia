<?php

namespace Wikipedia;

/*
 * Copyright (C) 2015 Jacobi Carter and Chris Breneman
 *
 * This file is part of ClueBot's Wikipedia API.
 *
 * ClueBot's Wikipedia API is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * ClueBot's Wikipedia API is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with ClueBot's Wikipedia API.  If not, see <http://www.gnu.org/licenses/>.
 */

class QueryTest extends \PHPUnit\Framework\TestCase
{
    public function testContribCount()
    {
        $query = new Query();
        $ret = $query->contribcount('ClueBot NG');
        $this->assertGreaterThan(10, $query->contribcount('ClueBot NG'));
    }

    public function testHttpInstancel()
    {
        $http = new Http();

        $query = new Query($http);
        $ret = $query->contribcount('ClueBot NG');
        $this->assertGreaterThan(10, $query->contribcount('ClueBot NG'));
    }

    public function testLoggerInstancel()
    {
        $logger = new \Monolog\Logger('wikipedia');

        $query = new Query(null, $logger);
        $ret = $query->contribcount('ClueBot NG');
        $this->assertGreaterThan(10, $query->contribcount('ClueBot NG'));
    }
}
