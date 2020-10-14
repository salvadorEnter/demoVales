<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Class PortalDashboardHelper
 *
 * Helper methods for Portal Dashboard manipulation and retrieval.
 */
class PortalDashboardHelper
{
    public static $portalDashboards = [
        '0ca2d773-0bb3-4bf3-ae43-68569968af57',
        '0ca2d773-3dc6-70d9-fa91-68569968af57',
    ];

    /**
     * Adds filter to remove portal dashboards.
     * @param SugarBean $bean
     * @param string $event
     * @param array $args
     */
    public function removePortalDashboards(SugarBean $bean, string $event, array $args)
    {
        $platform = $_SESSION['platform'] ?? 'base';
        if ($platform !== 'portal' && isset($args[0]) && $args[0] instanceof SugarQuery) {
            $args[0]->where()->notIn('id', self::$portalDashboards);
        }
    }

    /**
     * Checks if it's a portal dashboard.
     * @param SugarBean $bean
     * @param string $event
     * @param array $args
     * @throws SugarApiExceptionNotAuthorized
     */
    public function checkPortalDashboard(SugarBean $bean, string $event, array $args)
    {
        $platform = $_SESSION['platform'] ?? 'base';
        if ($platform !== 'portal' && !empty($args['id']) && in_array($args['id'], self::$portalDashboards)) {
            throw new SugarApiExceptionNotAuthorized('SUGAR_API_EXCEPTION_RECORD_NOT_AUTHORIZED', ['view']);
        }
    }
}
