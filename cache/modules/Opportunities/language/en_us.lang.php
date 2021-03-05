<?php
// created: 2021-03-05 18:57:44
$mod_strings = array (
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => 'Date Created',
  'LBL_DATE_MODIFIED' => 'Date Modified',
  'LBL_MODIFIED' => 'Modified By',
  'LBL_MODIFIED_ID' => 'Modified by ID',
  'LBL_MODIFIED_NAME' => 'Modified by User Name',
  'LBL_CREATED' => 'Created By',
  'LBL_CREATED_ID' => 'Created by ID',
  'LBL_DESCRIPTION' => 'Descricao',
  'LBL_DELETED' => 'Deleted',
  'LBL_NAME' => 'Opportunity Name',
  'LBL_CREATED_USER' => 'Created User',
  'LBL_MODIFIED_USER' => 'Modified User',
  'LBL_LIST_NAME' => 'Name',
  'LBL_EDIT_BUTTON' => 'Edit',
  'LBL_REMOVE' => 'Remove',
  'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
  'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
  'LBL_MODULE_NAME' => 'Servicos',
  'LBL_MODULE_TITLE' => 'Opportunities: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Servico Search',
  'LBL_VIEW_FORM_TITLE' => 'Opportunity View',
  'LBL_LIST_FORM_TITLE' => 'Servico List',
  'LBL_OPPORTUNITY_NAME' => 'Nome do Servico',
  'LBL_OPPORTUNITY' => 'Opportunity:',
  'LBL_INVITEE' => 'Contacts',
  'LBL_CURRENCIES' => 'Currencies',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Name',
  'LBL_LIST_ACCOUNT_NAME' => 'Empresa Name',
  'LBL_LIST_AMOUNT' => 'Opportunity Amount',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Amount',
  'LBL_LIST_DATE_CLOSED' => 'Close',
  'LBL_LIST_SALES_STAGE' => 'Sales Stage',
  'LBL_ACCOUNT_ID' => 'Empresa ID',
  'LBL_CURRENCY_ID' => 'Currency ID',
  'LBL_CURRENCY_NAME' => 'Currency Name',
  'LBL_CURRENCY_SYMBOL' => 'Currency Symbol',
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
  'UPDATE' => 'Opportunity - Currency Update',
  'UPDATE_DOLLARAMOUNTS' => 'Update U.S. Dollar Amounts',
  'UPDATE_VERIFY' => 'Verify Amounts',
  'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in opportunities are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
  'UPDATE_FIX' => 'Fix Amounts',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for opportunities based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Creating New Currency:',
  'UPDATE_VERIFY_FAIL' => 'Record Failed Verification:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Current Amount:',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'UPDATE_INCLUDE_CLOSE' => 'Include Closed Records',
  'UPDATE_VERIFY_NEWAMOUNT' => 'New Amount:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'New Currency:',
  'UPDATE_DONE' => 'Done',
  'UPDATE_BUG_COUNT' => 'Bugs Found and Attempted to Resolve:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs Found:',
  'UPDATE_COUNT' => 'Records Updated:',
  'UPDATE_RESTORE_COUNT' => 'Record Amounts Restored:',
  'UPDATE_RESTORE' => 'Restore Amounts',
  'UPDATE_RESTORE_TXT' => 'Restores amount values from the backups created during fix.',
  'UPDATE_FAIL' => 'Could not update - ',
  'UPDATE_NULL_VALUE' => 'Amount is NULL setting it to 0 -',
  'UPDATE_MERGE' => 'Merge Currencies',
  'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
  'LBL_ACCOUNT_NAME' => 'Empresa Name:',
  'LBL_AMOUNT' => 'Valor',
  'LBL_AMOUNT_USDOLLAR' => 'Amount:',
  'LBL_CURRENCY' => 'Currency:',
  'LBL_DATE_CLOSED' => 'Vencimento',
  'LBL_TYPE' => 'Type:',
  'LBL_CAMPAIGN' => 'Campaign:',
  'LBL_NEXT_STEP' => 'Next Step:',
  'LBL_LEAD_SOURCE' => 'Lead Source:',
  'LBL_SALES_STAGE' => 'Status',
  'LBL_PROBABILITY' => 'Probability (%):',
  'LBL_DUPLICATE' => 'Possible Duplicate Opportunity',
  'MSG_DUPLICATE' => 'The opportunity record you are about to create might be a duplicate of a opportunity record that already exists. Opportunity records containing similar names are listed below.<br>Click Save to continue creating this new opportunity, or click Cancel to return to the module without creating the opportunity.',
  'LBL_NEW_FORM_TITLE' => 'Create Opportunity',
  'LNK_NEW_OPPORTUNITY' => 'Create Servico',
  'LNK_OPPORTUNITY_LIST' => 'View Servicos',
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the opportunity.',
  'LBL_TOP_OPPORTUNITIES' => 'My Top Open Servicos',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Are you sure you want to remove this contact from the opportunity?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this opportunity from the project?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opportunities',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
  'LBL_RAW_AMOUNT' => 'Raw Amount',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'My Closed Servicos',
  'LBL_TOTAL_OPPORTUNITIES' => 'Total Opportunities',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Closed Won Opportunities',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Campaigns',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
  'LABEL_PANEL_ASSIGNMENT' => 'Assignment',
  'LNK_IMPORT_OPPORTUNITIES' => 'Import Servicos',
  'LBL_EDITLAYOUT' => 'Edit Layout',
  'LBL_EXPORT_CAMPAIGN_ID' => 'Campaign ID',
  'LBL_OPPORTUNITY_TYPE' => 'Opportunity Type',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
  'LBL_EXPORT_CREATED_BY' => 'Created By ID',
  'LBL_EXPORT_NAME' => 'Name',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts\' Emails',
  'LBL_ACCOUNTS' => 'Empresas',
  'LBL_CONTACTS' => 'Contatos',
  'LBL_TASKS' => 'Tarefas',
  'LBL_NOTES' => 'Anotacoes',
  'LBL_CALLS' => 'Ligacoes',
  'LBL_MEETINGS' => 'Sessoes',
  'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE' => 'Contatos',
);