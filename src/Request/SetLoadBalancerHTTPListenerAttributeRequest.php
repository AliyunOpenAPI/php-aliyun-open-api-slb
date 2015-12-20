<?php namespace Aliyun\SLB\Request;

/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

use Aliyun\Core\RpcAcsRequest;

class SetLoadBalancerHTTPListenerAttributeRequest extends RpcAcsRequest
{

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $loadBalancerId;

    private $listenerPort;

    private $bandwidth;

    private $xForwardedFor;

    private $scheduler;

    private $stickySession;

    private $stickySessionType;

    private $cookieTimeout;

    private $cookie;

    private $healthCheck;

    private $healthCheckDomain;

    private $healthCheckURI;

    private $healthyThreshold;

    private $unhealthyThreshold;

    private $healthCheckTimeout;

    private $healthCheckInterval;

    private $healthCheckConnectPort;

    private $healthCheckHttpCode;

    private $ownerAccount;


    public function  __construct()
    {
        parent::__construct("Slb", "2014-05-15", "SetLoadBalancerHTTPListenerAttribute");
    }


    public function getOwnerId()
    {
        return $this->ownerId;
    }


    public function setOwnerId($ownerId)
    {
        $this->ownerId                    = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }


    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }


    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount                    = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }


    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }


    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId                    = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }


    public function getLoadBalancerId()
    {
        return $this->loadBalancerId;
    }


    public function setLoadBalancerId($loadBalancerId)
    {
        $this->loadBalancerId                    = $loadBalancerId;
        $this->queryParameters["LoadBalancerId"] = $loadBalancerId;
    }


    public function getListenerPort()
    {
        return $this->listenerPort;
    }


    public function setListenerPort($listenerPort)
    {
        $this->listenerPort                    = $listenerPort;
        $this->queryParameters["ListenerPort"] = $listenerPort;
    }


    public function getBandwidth()
    {
        return $this->bandwidth;
    }


    public function setBandwidth($bandwidth)
    {
        $this->bandwidth                    = $bandwidth;
        $this->queryParameters["Bandwidth"] = $bandwidth;
    }


    public function getXForwardedFor()
    {
        return $this->xForwardedFor;
    }


    public function setXForwardedFor($xForwardedFor)
    {
        $this->xForwardedFor                    = $xForwardedFor;
        $this->queryParameters["XForwardedFor"] = $xForwardedFor;
    }


    public function getScheduler()
    {
        return $this->scheduler;
    }


    public function setScheduler($scheduler)
    {
        $this->scheduler                    = $scheduler;
        $this->queryParameters["Scheduler"] = $scheduler;
    }


    public function getStickySession()
    {
        return $this->stickySession;
    }


    public function setStickySession($stickySession)
    {
        $this->stickySession                    = $stickySession;
        $this->queryParameters["StickySession"] = $stickySession;
    }


    public function getStickySessionType()
    {
        return $this->stickySessionType;
    }


    public function setStickySessionType($stickySessionType)
    {
        $this->stickySessionType                    = $stickySessionType;
        $this->queryParameters["StickySessionType"] = $stickySessionType;
    }


    public function getCookieTimeout()
    {
        return $this->cookieTimeout;
    }


    public function setCookieTimeout($cookieTimeout)
    {
        $this->cookieTimeout                    = $cookieTimeout;
        $this->queryParameters["CookieTimeout"] = $cookieTimeout;
    }


    public function getCookie()
    {
        return $this->cookie;
    }


    public function setCookie($cookie)
    {
        $this->cookie                    = $cookie;
        $this->queryParameters["Cookie"] = $cookie;
    }


    public function getHealthCheck()
    {
        return $this->healthCheck;
    }


    public function setHealthCheck($healthCheck)
    {
        $this->healthCheck                    = $healthCheck;
        $this->queryParameters["HealthCheck"] = $healthCheck;
    }


    public function getHealthCheckDomain()
    {
        return $this->healthCheckDomain;
    }


    public function setHealthCheckDomain($healthCheckDomain)
    {
        $this->healthCheckDomain                    = $healthCheckDomain;
        $this->queryParameters["HealthCheckDomain"] = $healthCheckDomain;
    }


    public function getHealthCheckURI()
    {
        return $this->healthCheckURI;
    }


    public function setHealthCheckURI($healthCheckURI)
    {
        $this->healthCheckURI                    = $healthCheckURI;
        $this->queryParameters["HealthCheckURI"] = $healthCheckURI;
    }


    public function getHealthyThreshold()
    {
        return $this->healthyThreshold;
    }


    public function setHealthyThreshold($healthyThreshold)
    {
        $this->healthyThreshold                    = $healthyThreshold;
        $this->queryParameters["HealthyThreshold"] = $healthyThreshold;
    }


    public function getUnhealthyThreshold()
    {
        return $this->unhealthyThreshold;
    }


    public function setUnhealthyThreshold($unhealthyThreshold)
    {
        $this->unhealthyThreshold                    = $unhealthyThreshold;
        $this->queryParameters["UnhealthyThreshold"] = $unhealthyThreshold;
    }


    public function getHealthCheckTimeout()
    {
        return $this->healthCheckTimeout;
    }


    public function setHealthCheckTimeout($healthCheckTimeout)
    {
        $this->healthCheckTimeout                    = $healthCheckTimeout;
        $this->queryParameters["HealthCheckTimeout"] = $healthCheckTimeout;
    }


    public function getHealthCheckInterval()
    {
        return $this->healthCheckInterval;
    }


    public function setHealthCheckInterval($healthCheckInterval)
    {
        $this->healthCheckInterval                    = $healthCheckInterval;
        $this->queryParameters["HealthCheckInterval"] = $healthCheckInterval;
    }


    public function getHealthCheckConnectPort()
    {
        return $this->healthCheckConnectPort;
    }


    public function setHealthCheckConnectPort($healthCheckConnectPort)
    {
        $this->healthCheckConnectPort                    = $healthCheckConnectPort;
        $this->queryParameters["HealthCheckConnectPort"] = $healthCheckConnectPort;
    }


    public function getHealthCheckHttpCode()
    {
        return $this->healthCheckHttpCode;
    }


    public function setHealthCheckHttpCode($healthCheckHttpCode)
    {
        $this->healthCheckHttpCode                    = $healthCheckHttpCode;
        $this->queryParameters["HealthCheckHttpCode"] = $healthCheckHttpCode;
    }


    public function getOwnerAccount()
    {
        return $this->ownerAccount;
    }


    public function setOwnerAccount($ownerAccount)
    {
        $this->ownerAccount                    = $ownerAccount;
        $this->queryParameters["OwnerAccount"] = $ownerAccount;
    }

}