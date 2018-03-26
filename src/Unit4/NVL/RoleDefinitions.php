<?php

namespace Unit4\NVL;

/**
 * Class RoleDefinitions
 *
 * These definitions are determined by Unit4, and are hard-coded key/values there
 */
class RoleDefinitions
{
    private $definitions = [];

    public function __construct()
    {
        $this->definitions = [
            0  => 'General',
            1  => 'ContactForSalesOrders',
            2  => 'ContactForPurchaseOrders',
            3  => 'ContactForSalesInvoices',
            4  => 'ContactForPurchaseInvoices',
            5  => 'ContactForProjects',
            6  => 'ContactForSubscriptions',
            7  => 'ContactForActionsAndNotes',
            8  => 'ApproverForPurchaseOrders',
            9  => 'ApproverForSalesOrders',
            10 => 'ApproverForQuotations',
            11 => 'ApproverForSupplierInvoices',
            12 => 'AccountsReceivableEmployee',
            13 => 'AccountsPayableEmployee',
            14 => 'Salesperson',
            15 => 'PurchasePerson',
            16 => 'ProjectManager',
            17 => 'ProjectEmployee',
            18 => 'ContactForQuotation',
            19 => 'AccountManager',
            20 => 'ContactForManagement',
            21 => 'ContactForAccountant',
            22 => 'TimesheetEmployee',
            23 => 'QuotationPerson',
            24 => 'SubscriptionsPerson',
        ];
    }

    public function getDefinitions()
    {
        return $this->definitions;
    }
}