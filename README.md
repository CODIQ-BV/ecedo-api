# ECEDO API Client
Een client om de ECEDO API aan te spreken.
Authenticatie geschiedt via basic

## API Documentatie


Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CpoBrokerApi* | [**cpoBrokerAddEvChargerCdr**](docs/Api/CpoBrokerApi.md#cpobrokeraddevchargercdr) | **POST** /cpobroker/v1.0/evchargercdrs | Registers a charge session (CDR) with a charger
*CpoBrokerApi* | [**cpoBrokerEvCharger**](docs/Api/CpoBrokerApi.md#cpobrokerevcharger) | **POST** /cpobroker/v1.0/evcharger | Updates the status of a single charger, specified by Evse OcpiId
*CpoBrokerApi* | [**cpoBrokerGetSessionPrice**](docs/Api/CpoBrokerApi.md#cpobrokergetsessionprice) | **GET** /cpobroker/v1.0/evses/{ocpiId}/sessionprice | Get the price for a charge session for a given EVSE, card and duration
*CpoBrokerApi* | [**cpoBrokerValidateEvCharger**](docs/Api/CpoBrokerApi.md#cpobrokervalidateevcharger) | **POST** /cpobroker/v1.0/evcharger/{chargerId} | Validate single charger and it&#39;s EVSE&#39;s
*SysAPIProcessLogsApi* | [**sysAPIProcessLogsPost**](docs/Api/SysAPIProcessLogsApi.md#sysapiprocesslogspost) | **POST** /sysapi/v1.0/processlogs | Algemene wijziging insturen
*SysAdvancePaymentsApi* | [**sysAdvancePaymentsDelete**](docs/Api/SysAdvancePaymentsApi.md#sysadvancepaymentsdelete) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/advancepayments/{advancePaymentId} | Voorschot verwijderen
*SysAdvancePaymentsApi* | [**sysAdvancePaymentsGetByAdvancePaymentId**](docs/Api/SysAdvancePaymentsApi.md#sysadvancepaymentsgetbyadvancepaymentid) | **GET** /sysapi/v1.0/organizations/{organizationId}/advancepayments/{advancePaymentId} | Haal specifiek voorschot op
*SysAdvancePaymentsApi* | [**sysAdvancePaymentsGetByOrganizationId**](docs/Api/SysAdvancePaymentsApi.md#sysadvancepaymentsgetbyorganizationid) | **GET** /sysapi/v1.0/organizations/{organizationId}/advancepayments | Haal voorschotten van een specifieke klant op
*SysAdvancePaymentsApi* | [**sysAdvancePaymentsPost**](docs/Api/SysAdvancePaymentsApi.md#sysadvancepaymentspost) | **POST** /sysapi/v1.0/organizations/{organizationId}/advancepayments | Nieuw voorschot aanmaken
*SysAdvancePaymentsApi* | [**sysAdvancePaymentsPut**](docs/Api/SysAdvancePaymentsApi.md#sysadvancepaymentsput) | **PUT** /sysapi/v1.0/organizations/{organizationId}/advancepayments/{advancePaymentId} | Voorschot wijzigen
*SysAnnualStandardUsagesApi* | [**sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsage**](docs/Api/SysAnnualStandardUsagesApi.md#sysannualstandardusagesdeleteexpectedannualstandardusage) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/expectedannualstandardusages | Verwijderen verwacht jaarverbruik
*SysAnnualStandardUsagesApi* | [**sysAnnualStandardUsagesPostExpectedAnnualStandardUsage**](docs/Api/SysAnnualStandardUsagesApi.md#sysannualstandardusagespostexpectedannualstandardusage) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/expectedannualstandardusages | Aanpassen verwacht jaarverbruik
*SysAnnualStandardUsagesApi* | [**sysAnnualStandardUsagesSetActiveAnnualStandardUsageType**](docs/Api/SysAnnualStandardUsagesApi.md#sysannualstandardusagessetactiveannualstandardusagetype) | **PUT** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/annualstandardusages/setactiveannualstandardusagetype | Aanpassen actief verbruikstype
*SysBillingItemsApi* | [**sysBillingItemsActivate**](docs/Api/SysBillingItemsApi.md#sysbillingitemsactivate) | **POST** /sysapi/v1.0/organizations/{organizationId}/billingitems/{billingItemId}/activate | Markeer factuuritem als geactiveerd
*SysBillingItemsApi* | [**sysBillingItemsCancel**](docs/Api/SysBillingItemsApi.md#sysbillingitemscancel) | **POST** /sysapi/v1.0/organizations/{organizationId}/billingitems/{billingItemId}/cancel | Markeer factuuritem als gedeactiveerd
*SysBillingItemsApi* | [**sysBillingItemsDelete**](docs/Api/SysBillingItemsApi.md#sysbillingitemsdelete) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/billingitems/{billingItemId} | Markeer factuuritem als verwijderd
*SysBillingItemsApi* | [**sysBillingItemsGetBillingItemGroups**](docs/Api/SysBillingItemsApi.md#sysbillingitemsgetbillingitemgroups) | **GET** /sysapi/v1.0/billingItemGroups | Haal factuuritemgroepen op
*SysBillingItemsApi* | [**sysBillingItemsGetByBillingItemId**](docs/Api/SysBillingItemsApi.md#sysbillingitemsgetbybillingitemid) | **GET** /sysapi/v1.0/organizations/{organizationId}/billingitems/{billingItemId} | 
*SysBillingItemsApi* | [**sysBillingItemsGetByOrganizationId**](docs/Api/SysBillingItemsApi.md#sysbillingitemsgetbyorganizationid) | **GET** /sysapi/v1.0/organizations/{organizationId}/billingitems | Haal factuuritems van een specifieke klant op
*SysBillingItemsApi* | [**sysBillingItemsPost**](docs/Api/SysBillingItemsApi.md#sysbillingitemspost) | **POST** /sysapi/v1.0/organizations/{organizationId}/billingitems | Nieuw factuuritem aanmaken
*SysBillingItemsApi* | [**sysBillingItemsPut**](docs/Api/SysBillingItemsApi.md#sysbillingitemsput) | **PUT** /sysapi/v1.0/organizations/{organizationId}/billingitems/{billingItemId} | Wijzig een specifiek factuuritem
*SysCdrApi* | [**sysCdrGetByChargeSessionId**](docs/Api/SysCdrApi.md#syscdrgetbychargesessionid) | **GET** /sysapi/v1.0/chargesessions/{chargeSessionId} | 
*SysCdrApi* | [**sysCdrGetByExternalChargeSessionId**](docs/Api/SysCdrApi.md#syscdrgetbyexternalchargesessionid) | **GET** /sysapi/v1.0/chargesessions/byexternalid/{externalChargeSessionId} | 
*SysCdrApi* | [**sysCdrPost**](docs/Api/SysCdrApi.md#syscdrpost) | **POST** /sysapi/v1.0/cdrs | Aanmaken CDR records
*SysCdrApi* | [**sysCdrPostPassiveSmartCdr**](docs/Api/SysCdrApi.md#syscdrpostpassivesmartcdr) | **POST** /sysapi/v1.0/imbalancepfdrs | Aanmaken passieve onbalans laadsessies (passive Imbalance Flex Detail Records)
*SysCdrApi* | [**sysCdrPostSmartCdr**](docs/Api/SysCdrApi.md#syscdrpostsmartcdr) | **POST** /sysapi/v1.0/imbalancefdrs | Aanmaken sessie&#39;s voor Onbalans Flex producten
*SysCertiQApi* | [**sysCertiQGetCurrentCertiQReport**](docs/Api/SysCertiQApi.md#syscertiqgetcurrentcertiqreport) | **GET** /sysapi/v1.0/certiq/report | Geeft het actuele CertiQ rapport
*SysCertiQApi* | [**sysCertiQGetMeansOfProductionCertiqDashboardData**](docs/Api/SysCertiQApi.md#syscertiqgetmeansofproductioncertiqdashboarddata) | **GET** /sysapi/v1.0/organizations/{organizationId}/certiqstatistics | Verkrijg certificaat statistieken
*SysCertiQApi* | [**sysCertiQGetMeansOfProductionCertiqTransactions**](docs/Api/SysCertiQApi.md#syscertiqgetmeansofproductioncertiqtransactions) | **GET** /sysapi/v1.0/organizations/{organizationId}/meansofproductions/{meansOfProductionId}/certiqtransactions | Verkrijg transacties per periode en CertiqEAN
*SysChargeSessionApi* | [**sysChargeSessionGetChargeSessionsByInvoice**](docs/Api/SysChargeSessionApi.md#syschargesessiongetchargesessionsbyinvoice) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/chargesessions | Verkrijg laadsessies voor een invoice
*SysChargeSessionApi* | [**sysChargeSessionPost**](docs/Api/SysChargeSessionApi.md#syschargesessionpost) | **POST** /sysapi/v1.0/chargesession | 
*SysClientMandateApi* | [**sysClientMandatePost**](docs/Api/SysClientMandateApi.md#sysclientmandatepost) | **POST** /sysapi/v1.0/clientmandate | ClientMandate opslaan
*SysCommandsApi* | [**sysCommandsSendCommand**](docs/Api/SysCommandsApi.md#syscommandssendcommand) | **POST** /sysapi/v1.0/sendCommand | 
*SysConnectionGroupApi* | [**sysConnectionGroupGet**](docs/Api/SysConnectionGroupApi.md#sysconnectiongroupget) | **GET** /sysapi/v1.0/organizations/{organizationId}/connectiongroups | 
*SysConnectionGroupApi* | [**sysConnectionGroupPost**](docs/Api/SysConnectionGroupApi.md#sysconnectiongrouppost) | **POST** /sysapi/v1.0/organizations/{organizationId}/connectiongroups | 
*SysConnectionGroupApi* | [**sysConnectionGroupPutClusterContractChange**](docs/Api/SysConnectionGroupApi.md#sysconnectiongroupputclustercontractchange) | **POST** /sysapi/v1.0/organizations/{organizationId}/connectiongroups/{clusterReference}/ClusterContractChange | 
*SysConnectionsApi* | [**sysConnectionsChangeAllocationMethod**](docs/Api/SysConnectionsApi.md#sysconnectionschangeallocationmethod) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/changeallocationmethod | Wijzig allocatiemethode
*SysConnectionsApi* | [**sysConnectionsConnectionProperties**](docs/Api/SysConnectionsApi.md#sysconnectionsconnectionproperties) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/connectionproperties | Wijzig aansluitinggegevens
*SysConnectionsApi* | [**sysConnectionsGetByConnectionId**](docs/Api/SysConnectionsApi.md#sysconnectionsgetbyconnectionid) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId} | Haal specifieke aansluiting op
*SysConnectionsApi* | [**sysConnectionsGetByOrganizationId**](docs/Api/SysConnectionsApi.md#sysconnectionsgetbyorganizationid) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections | Haal aansluitingen van een specifieke klant op
*SysConnectionsApi* | [**sysConnectionsPost**](docs/Api/SysConnectionsApi.md#sysconnectionspost) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections | Nieuwe aansluiting(en) aanmaken
*SysConnectionsApi* | [**sysConnectionsPut**](docs/Api/SysConnectionsApi.md#sysconnectionsput) | **PUT** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId} | Wijzig een specifiek aansluiting
*SysConnectionsApi* | [**sysConnectionsUpdateMeteringPoint**](docs/Api/SysConnectionsApi.md#sysconnectionsupdatemeteringpoint) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meteringpoint | Aansluiting bijwerken met EDSN gegevens
*SysConnectionsMoveApi* | [**sysConnectionsMoveMove**](docs/Api/SysConnectionsMoveApi.md#sysconnectionsmovemove) | **POST** /sysapi/v1.0/organizations/{organizationId}/moveconnections | Verhuisflow starten
*SysContractPricesApi* | [**sysContractPricesGet**](docs/Api/SysContractPricesApi.md#syscontractpricesget) | **GET** /sysapi/v1.0/organizations/{organizationId}/contracts/{contractId}/prices | Opvragen contract prijzen
*SysContractPricesApi* | [**sysContractPricesPost**](docs/Api/SysContractPricesApi.md#syscontractpricespost) | **POST** /sysapi/v1.0/organizations/{organizationId}/contracts/{contractId}/prices | Toevoegen contract prijzen
*SysContractsApi* | [**sysContractsCreateOnbalansFlexContract**](docs/Api/SysContractsApi.md#syscontractscreateonbalansflexcontract) | **POST** /sysapi/v1.0/organizations/{organizationId}/onbalansflexcontracts | Toevoegen van een onbalansflex contract
*SysContractsApi* | [**sysContractsDeleteContract**](docs/Api/SysContractsApi.md#syscontractsdeletecontract) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/contracts/{contractId} | Verwijderen van een contract
*SysContractsApi* | [**sysContractsDeleteContractProperties**](docs/Api/SysContractsApi.md#syscontractsdeletecontractproperties) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/contracts/{contractId}/contractproperties/{contractPropertyType} | Verwijder een contract property
*SysContractsApi* | [**sysContractsEditOnbalansFlexContract**](docs/Api/SysContractsApi.md#syscontractseditonbalansflexcontract) | **PUT** /sysapi/v1.0/organizations/{organizationId}/onbalansflexcontracts/{contractId} | Wijzigen van een onbalansflex contract
*SysContractsApi* | [**sysContractsGetChargeContractById**](docs/Api/SysContractsApi.md#syscontractsgetchargecontractbyid) | **GET** /sysapi/v1.0/organizations/{organizationId}/chargecardcontracts/{contractId} | Ophalen van een laadpascontract op basis van contractId
*SysContractsApi* | [**sysContractsGetConnectionContracts**](docs/Api/SysContractsApi.md#syscontractsgetconnectioncontracts) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/connectioncontracts | Aansluitingcontracten ophalen van een aansluiting
*SysContractsApi* | [**sysContractsGetContracts**](docs/Api/SysContractsApi.md#syscontractsgetcontracts) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/contracts | Energieleveringcontracten ophalen van een aansluiting
*SysContractsApi* | [**sysContractsGetEnergieInkoopContract**](docs/Api/SysContractsApi.md#syscontractsgetenergieinkoopcontract) | **GET** /sysapi/v1.0/organizations/{organizationId}/energieinkoopcontracts/{contractId} | Ophalen van een energieinkoopcontract op basis van contractId
*SysContractsApi* | [**sysContractsGetEnergieleveringConnectionContractForContract**](docs/Api/SysContractsApi.md#syscontractsgetenergieleveringconnectioncontractforcontract) | **GET** /sysapi/v1.0/organizations/{organizationId}/energieleveringconnectioncontracts/{contractId} | Ophalen van energieleveringconnectioncontract op basis van contractId
*SysContractsApi* | [**sysContractsGetEnergieleveringConnectionContracts**](docs/Api/SysContractsApi.md#syscontractsgetenergieleveringconnectioncontracts) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/energieleveringconnectioncontracts | Energieleveringaansluitingcontracten ophalen van een aansluiting
*SysContractsApi* | [**sysContractsGetMeeliftConnectionContractForContract**](docs/Api/SysContractsApi.md#syscontractsgetmeeliftconnectioncontractforcontract) | **GET** /sysapi/v1.0/organizations/{organizationId}/meeliftconnectioncontracts/{contractId} | Ophalen van meeliftconnectioncontract op basis van contractId
*SysContractsApi* | [**sysContractsGetMeeliftConnectionContracts**](docs/Api/SysContractsApi.md#syscontractsgetmeeliftconnectioncontracts) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meeliftconnectioncontracts | Meeliftaansluitingcontracten ophalen van een aansluiting
*SysContractsApi* | [**sysContractsGetMeeliftContracts**](docs/Api/SysContractsApi.md#syscontractsgetmeeliftcontracts) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meeliftcontracts | Meeliftcontracten ophalen van een aansluiting
*SysContractsApi* | [**sysContractsGetOnbalansFlexContract**](docs/Api/SysContractsApi.md#syscontractsgetonbalansflexcontract) | **GET** /sysapi/v1.0/organizations/{organizationId}/onbalansflexcontracts/{contractId} | Ophalen van een onbalansflex contract
*SysContractsApi* | [**sysContractsPostContractProperties**](docs/Api/SysContractsApi.md#syscontractspostcontractproperties) | **POST** /sysapi/v1.0/organizations/{organizationId}/contracts/{contractId}/contractproperties | Pas een contract property aan
*SysContractsApi* | [**sysContractsPostContracts**](docs/Api/SysContractsApi.md#syscontractspostcontracts) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/contracts | Energieleveringcontract aanmaken
*SysContractsApi* | [**sysContractsPostSwitchProducer**](docs/Api/SysContractsApi.md#syscontractspostswitchproducer) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/switchproducer | Veranderen van producent op een aansluiting
*SysContractsApi* | [**sysContractsPutContracts**](docs/Api/SysContractsApi.md#syscontractsputcontracts) | **PUT** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/contracts/{contractId} | Energieleveringcontract wijzigen
*SysCustomInvoicesApi* | [**sysCustomInvoicesCreateCustomInvoice**](docs/Api/SysCustomInvoicesApi.md#syscustominvoicescreatecustominvoice) | **POST** /sysapi/v1.0/organizations/{organizationId}/custominvoices | Aanmaken van een handmatige factuur
*SysCustomPriceComponentApi* | [**sysCustomPriceComponentGetCustomPriceComponents**](docs/Api/SysCustomPriceComponentApi.md#syscustompricecomponentgetcustompricecomponents) | **GET** /sysapi/v1.0/custompricecomponents | Opvragen alle custom price componenten
*SysDashboardApi* | [**sysDashboardGetDashboardOrganizationsByIdOrReference**](docs/Api/SysDashboardApi.md#sysdashboardgetdashboardorganizationsbyidorreference) | **GET** /sysapi/v1.0/dashboard/organizations/{organizationIdOrReference} | Ophalen van dashboardgegevens
*SysDealApi* | [**sysDealGet**](docs/Api/SysDealApi.md#sysdealget) | **GET** /sysapi/v1.0/deals/meansofproductionconnections/{meansOfProductionConnectionId} | Opvragen deals voor meansofproduction aansluitingen
*SysDebtorApi* | [**sysDebtorDeleteDebtorProperties**](docs/Api/SysDebtorApi.md#sysdebtordeletedebtorproperties) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/debtors/{debtorId}/debtorproperties/{debtorProperty} | Verwijder een debiteur-eigenschap
*SysDebtorApi* | [**sysDebtorGetDebtorProperties**](docs/Api/SysDebtorApi.md#sysdebtorgetdebtorproperties) | **GET** /sysapi/v1.0/organizations/{organizationId}/debtors/{debtorId}/debtorproperties/{debtorProperty} | Ophalen van debiteur-eigenschappen
*SysDebtorApi* | [**sysDebtorPostDebtorProperties**](docs/Api/SysDebtorApi.md#sysdebtorpostdebtorproperties) | **POST** /sysapi/v1.0/organizations/{organizationId}/debtors/{debtorId}/debtorproperties | Instellen van een debiteur-eigenschap
*SysDocumentsApi* | [**sysDocumentsDownload**](docs/Api/SysDocumentsApi.md#sysdocumentsdownload) | **GET** /sysapi/v1.0/organizations/{organizationId}/documents/{documentId}/download | Download document
*SysDocumentsApi* | [**sysDocumentsGenerateDocument**](docs/Api/SysDocumentsApi.md#sysdocumentsgeneratedocument) | **POST** /sysapi/v1.0/organizations/{organizationId}/documents/generatedocument | Genereer document
*SysDocumentsApi* | [**sysDocumentsGetDocument**](docs/Api/SysDocumentsApi.md#sysdocumentsgetdocument) | **GET** /sysapi/v1.0/organizations/{organizationId}/documents/{documentId} | Retrieves a document based on the organization and documentid
*SysDocumentsApi* | [**sysDocumentsGetDocuments**](docs/Api/SysDocumentsApi.md#sysdocumentsgetdocuments) | **GET** /sysapi/v1.0/organizations/{organizationId}/documents | Get documents. Eventueel gefilterd op documenttype. Bij het documenttype &#39;UserDocument&#39; kan ook op userdocumenttype gefilterd worden.
*SysDocumentsApi* | [**sysDocumentsStoreNexusBallNotification**](docs/Api/SysDocumentsApi.md#sysdocumentsstorenexusballnotification) | **POST** /sysapi/v1.0/documents/nexus/allocation | Upload a BALLNotification from Nexus
*SysDocumentsApi* | [**sysDocumentsStorePVNEDTimeSeriesDocument**](docs/Api/SysDocumentsApi.md#sysdocumentsstorepvnedtimeseriesdocument) | **POST** /sysapi/v1.0/documents/pvned/timeseriesdocument | Upload and process PVNED&#39;s Time Series Document
*SysDocumentsApi* | [**sysDocumentsUploadUserDocument**](docs/Api/SysDocumentsApi.md#sysdocumentsuploaduserdocument) | **POST** /sysapi/v1.0/documents/UploadUserDocument/{organizationId}/{userDocumentType} | Upload document
*SysDraftAdvancePaymentsApi* | [**sysDraftAdvancePaymentsCalculateDraftAdvancePaymentForNonOrganization**](docs/Api/SysDraftAdvancePaymentsApi.md#sysdraftadvancepaymentscalculatedraftadvancepaymentfornonorganization) | **POST** /sysapi/v1.0/draftadvancepayments | Aanmaken proefvoorschot
*SysDraftAdvancePaymentsApi* | [**sysDraftAdvancePaymentsCalulateDraftAdvancePayment**](docs/Api/SysDraftAdvancePaymentsApi.md#sysdraftadvancepaymentscalulatedraftadvancepayment) | **POST** /sysapi/v1.0/organizations/{organizationId}/draftadvancepayments | Aanmaken proefvoorschot
*SysEntityRevisionApi* | [**sysEntityRevisionGetEntityRevisions**](docs/Api/SysEntityRevisionApi.md#sysentityrevisiongetentityrevisions) | **GET** /sysapi/v1.0/entityrevisions | Verkrijg Entiteiten die gewijzigd zijn na opgegeven datum
*SysEvChargeCardApi* | [**sysEvChargeCardActivate**](docs/Api/SysEvChargeCardApi.md#sysevchargecardactivate) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargecards/activate | Activeren van een laadpas
*SysEvChargeCardApi* | [**sysEvChargeCardAddRenewedEvChargeCardContract**](docs/Api/SysEvChargeCardApi.md#sysevchargecardaddrenewedevchargecardcontract) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/evchargecardcontracts | Toevoegen van een laadpascontract na een initieel contract
*SysEvChargeCardApi* | [**sysEvChargeCardBlock**](docs/Api/SysEvChargeCardApi.md#sysevchargecardblock) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId} | Blokkeren van een laadpas geactiveerd voor een organisatie
*SysEvChargeCardApi* | [**sysEvChargeCardGet**](docs/Api/SysEvChargeCardApi.md#sysevchargecardget) | **GET** /sysapi/v1.0/evchargecards/{evChargeCardId} | Zoeken Laadpas op Pasnummer of UniekId
*SysEvChargeCardApi* | [**sysEvChargeCardGetByOrganization**](docs/Api/SysEvChargeCardApi.md#sysevchargecardgetbyorganization) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargecards | Zoeken Laadpassen voor organisatie
*SysEvChargeCardApi* | [**sysEvChargeCardGetChargeContractsByOrganization**](docs/Api/SysEvChargeCardApi.md#sysevchargecardgetchargecontractsbyorganization) | **GET** /sysapi/v1.0/organizations/{organizationId}/chargecardcontracts | Verkrijg Laadpas contracten per organisatie
*SysEvChargeCardApi* | [**sysEvChargeCardGetEvChargeCardSessionsByChargeCard**](docs/Api/SysEvChargeCardApi.md#sysevchargecardgetevchargecardsessionsbychargecard) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/evchargesessions | Verkrijg laadsessies voor een laadpas van een organisatie
*SysEvChargeCardApi* | [**sysEvChargeCardRegister**](docs/Api/SysEvChargeCardApi.md#sysevchargecardregister) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargecards/register | Registreren van een organisatie voor een laadpas
*SysEvChargeCardCreditsApi* | [**sysEvChargeCardCreditsDeleteEvChargeCardCredit**](docs/Api/SysEvChargeCardCreditsApi.md#sysevchargecardcreditsdeleteevchargecardcredit) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/evchargecardcredits/{evChargeCardCreditId} | 
*SysEvChargeCardCreditsApi* | [**sysEvChargeCardCreditsPost**](docs/Api/SysEvChargeCardCreditsApi.md#sysevchargecardcreditspost) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/chargecardcredit | 
*SysEvChargeCardCreditsApi* | [**sysEvChargeCardCreditsUpdateEvChargeCardCredit**](docs/Api/SysEvChargeCardCreditsApi.md#sysevchargecardcreditsupdateevchargecardcredit) | **PUT** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/evchargecardcredits/{evChargeCardCreditId} | 
*SysEvChargerApi* | [**sysEvChargerAddChargeCards**](docs/Api/SysEvChargerApi.md#sysevchargeraddchargecards) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evchargecards | Toevoegen passen aan bestaande laadpaal
*SysEvChargerApi* | [**sysEvChargerAddConnector**](docs/Api/SysEvChargerApi.md#sysevchargeraddconnector) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evses/{ocpiId}/connector | Toevoegen connector aan Evse
*SysEvChargerApi* | [**sysEvChargerAddContract**](docs/Api/SysEvChargerApi.md#sysevchargeraddcontract) | **POST** /sysapi/v1.0/organizations/{organizationId}/evses/{evseId}/laadpaalcontract | Toevoegen laadpaalcontract aan Evse
*SysEvChargerApi* | [**sysEvChargerAddServiceContract**](docs/Api/SysEvChargerApi.md#sysevchargeraddservicecontract) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/servicecontracts | Toevoegen van een servicecontract aan een laadpaal
*SysEvChargerApi* | [**sysEvChargerDeleteChargeCards**](docs/Api/SysEvChargerApi.md#sysevchargerdeletechargecards) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evchargecards/{cardNumber} | Verwijderen passen van bestaande laadpaal
*SysEvChargerApi* | [**sysEvChargerEvChargerProperties**](docs/Api/SysEvChargerApi.md#sysevchargerevchargerproperties) | **POST** /sysapi/v1.0/organizations/{organizationId}/evcharger/{evChargerId}/evchargerproperties | Wijzigen laadpaal property
*SysEvChargerApi* | [**sysEvChargerGetByOrganization**](docs/Api/SysEvChargerApi.md#sysevchargergetbyorganization) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers | Laadpalen per organisatie
*SysEvChargerApi* | [**sysEvChargerGetChargeSessions**](docs/Api/SysEvChargerApi.md#sysevchargergetchargesessions) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evses/{ocpiId}/chargesessions | Get charge sessions for a given EVSE in a given period
*SysEvChargerApi* | [**sysEvChargerGetChargeSessionsForEvCharger**](docs/Api/SysEvChargerApi.md#sysevchargergetchargesessionsforevcharger) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/chargesessions | Get chargesessions for a given EvCharger in a period
*SysEvChargerApi* | [**sysEvChargerGetEvChargerContracts**](docs/Api/SysEvChargerApi.md#sysevchargergetevchargercontracts) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evchargercontracts | Verkrijgen van alle contracten behorend bij een laadpaal
*SysEvChargerApi* | [**sysEvChargerGetEvChargerServiceContracts**](docs/Api/SysEvChargerApi.md#sysevchargergetevchargerservicecontracts) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/servicecontracts | 
*SysEvChargerApi* | [**sysEvChargerGetSpecific**](docs/Api/SysEvChargerApi.md#sysevchargergetspecific) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId} | Eén specifieke laadpaal
*SysEvChargerApi* | [**sysEvChargerPost**](docs/Api/SysEvChargerApi.md#sysevchargerpost) | **POST** /sysapi/v1.0/organizations/{organizationId}/evcharger | Toevoegen laapaal
*SysEvChargerApi* | [**sysEvChargerPut**](docs/Api/SysEvChargerApi.md#sysevchargerput) | **PUT** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId} | Wijzigen laapaal
*SysEvChargerApi* | [**sysEvChargerUpdateEvseProperty**](docs/Api/SysEvChargerApi.md#sysevchargerupdateevseproperty) | **PUT** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evses/{evseId}/property | Update EVSE property GuestUsageAllowed
*SysFlowsApi* | [**sysFlowsAcceptProposedAdvancePayment**](docs/Api/SysFlowsApi.md#sysflowsacceptproposedadvancepayment) | **POST** /sysapi/v1.0/flows/advancepaymentcalculation/accept | 
*SysFlowsApi* | [**sysFlowsCancelApplicationFlow**](docs/Api/SysFlowsApi.md#sysflowscancelapplicationflow) | **POST** /sysapi/v1.0/flows/application/cancel | Aanmeldflow beëindigen
*SysFlowsApi* | [**sysFlowsCancelCoolingDownPeriodApplicationFlow**](docs/Api/SysFlowsApi.md#sysflowscancelcoolingdownperiodapplicationflow) | **POST** /sysapi/v1.0/flows/application/cancelcoolingdownperiod | 
*SysFlowsApi* | [**sysFlowsCancelMoveFlow**](docs/Api/SysFlowsApi.md#sysflowscancelmoveflow) | **POST** /sysapi/v1.0/flows/move/cancel | Verhuisflow afbreken
*SysFlowsApi* | [**sysFlowsCancelPurchaseFlow**](docs/Api/SysFlowsApi.md#sysflowscancelpurchaseflow) | **POST** /sysapi/v1.0/flows/productpurchase/cancel | Productaanschafflow afbreken
*SysFlowsApi* | [**sysFlowsCancelPurchaseFlowDeposit**](docs/Api/SysFlowsApi.md#sysflowscancelpurchaseflowdeposit) | **POST** /sysapi/v1.0/flows/productpurchase/canceldeposit | Productaanschafflow voor Borg afbreken
*SysFlowsApi* | [**sysFlowsCancelSwitchOutFlow**](docs/Api/SysFlowsApi.md#sysflowscancelswitchoutflow) | **POST** /sysapi/v1.0/flows/switchout/cancel | Uithuizingsflow afbreken
*SysFlowsApi* | [**sysFlowsEditMoveFlow**](docs/Api/SysFlowsApi.md#sysflowseditmoveflow) | **PUT** /sysapi/v1.0/flows/move/edit | Aanpassen van verhuisflow datums
*SysFlowsApi* | [**sysFlowsPushThroughApplicationFlow**](docs/Api/SysFlowsApi.md#sysflowspushthroughapplicationflow) | **POST** /sysapi/v1.0/flows/application/pushthrough | 
*SysFlowsApi* | [**sysFlowsSendSwitchOut**](docs/Api/SysFlowsApi.md#sysflowssendswitchout) | **POST** /sysapi/v1.0/flows/switchout/sendswitchout | Uithuizingsflow starten.
*SysFlowsApi* | [**sysFlowsStartAdvancePaymentCalculationFlow**](docs/Api/SysFlowsApi.md#sysflowsstartadvancepaymentcalculationflow) | **POST** /sysapi/v1.0/flows/advancepaymentcalculation/start | 
*SysFlowsApi* | [**sysFlowsStartApplicationFlow**](docs/Api/SysFlowsApi.md#sysflowsstartapplicationflow) | **POST** /sysapi/v1.0/flows/application/start | Aanmeldflow starten
*SysFlowsApi* | [**sysFlowsStartEnergyPVSwitchFlow**](docs/Api/SysFlowsApi.md#sysflowsstartenergypvswitchflow) | **POST** /sysapi/v1.0/flows/pvswitch/start | Start PV switchflow
*SysFlowsApi* | [**sysFlowsStartProductPurchaseFlow**](docs/Api/SysFlowsApi.md#sysflowsstartproductpurchaseflow) | **POST** /sysapi/v1.0/flows/productpurchase/start | Product purchase event starten voor organizationId en clusterReference  toegestane waarde voor eventType: DepositSettlement
*SysFlowsApi* | [**sysFlowsStartSettlementFlowForProduct**](docs/Api/SysFlowsApi.md#sysflowsstartsettlementflowforproduct) | **POST** /sysapi/v1.0/flows/product/startsettlement | Starten van de afrekening flow voor een product
*SysGdprApi* | [**sysGdprDelete**](docs/Api/SysGdprApi.md#sysgdprdelete) | **DELETE** /sysapi/v1.0/gdpr/organizations/{organizationId} | Verwijder opgeslagen gegevens van een organization
*SysGdprApi* | [**sysGdprGet**](docs/Api/SysGdprApi.md#sysgdprget) | **GET** /sysapi/v1.0/gdpr/organizations/{organizationId} | Zoek opgeslagen gegevens van een organization
*SysGreeningOptionsApi* | [**sysGreeningOptionsGetGreeningOptions**](docs/Api/SysGreeningOptionsApi.md#sysgreeningoptionsgetgreeningoptions) | **GET** /sysapi/v1.0/greeningoptions | Verkrijg de Vergroeningstypes
*SysInvoiceDataSetsApi* | [**sysInvoiceDataSetsGetByInvoiceId**](docs/Api/SysInvoiceDataSetsApi.md#sysinvoicedatasetsgetbyinvoiceid) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoicedatasets/{invoiceId} | Haal een invoice op bij een organization
*SysInvoiceDataSetsApi* | [**sysInvoiceDataSetsGetByInvoiceType**](docs/Api/SysInvoiceDataSetsApi.md#sysinvoicedatasetsgetbyinvoicetype) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoicetypes/{invoiceType}/invoicedatasets | Verkrijg een geaggregeerde dataset van facturen over een bepaalde periode
*SysInvoicesApi* | [**sysInvoicesByNumber**](docs/Api/SysInvoicesApi.md#sysinvoicesbynumber) | **GET** /sysapi/v1.0/invoices/bynumber/{invoiceNumber} | Haal een specifieke factuur op (op basis van factuurnummer)
*SysInvoicesApi* | [**sysInvoicesCredit**](docs/Api/SysInvoicesApi.md#sysinvoicescredit) | **POST** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/credit | Voorschot- of borgfactuur crediteren
*SysInvoicesApi* | [**sysInvoicesDownloadRemitReport**](docs/Api/SysInvoicesApi.md#sysinvoicesdownloadremitreport) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/downloadremitreport | Download Remit Report voor een factuur
*SysInvoicesApi* | [**sysInvoicesDownloadSingleInvoice**](docs/Api/SysInvoicesApi.md#sysinvoicesdownloadsingleinvoice) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/download | Download factuurdocument van een specifieke factuur
*SysInvoicesApi* | [**sysInvoicesGet**](docs/Api/SysInvoicesApi.md#sysinvoicesget) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices | Haal facturen van een specifieke klant op (op basis van InvoiceId)
*SysInvoicesApi* | [**sysInvoicesGetInvoice**](docs/Api/SysInvoicesApi.md#sysinvoicesgetinvoice) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId} | Haal een specifieke factuur op
*SysInvoicesApi* | [**sysInvoicesGetInvoicesWithPrettySmaUsages**](docs/Api/SysInvoicesApi.md#sysinvoicesgetinvoiceswithprettysmausages) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/prettyinvoiceusages | Haal verbruiksregels van een factuur op
*SysInvoicesApi* | [**sysInvoicesGetInvoicesWithSmaUsages**](docs/Api/SysInvoicesApi.md#sysinvoicesgetinvoiceswithsmausages) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/invoiceusages | Haal verbruiksregels van een factuur op
*SysMarketPricesApi* | [**sysMarketPricesGet**](docs/Api/SysMarketPricesApi.md#sysmarketpricesget) | **GET** /sysapi/v1.0/marketprices/{startDate}/{endDate}/{marketPriceType} | Haal marktprijzen op voor periode en marktprijstype
*SysMeansOfProductionExpectedYieldApi* | [**sysMeansOfProductionExpectedYieldGet**](docs/Api/SysMeansOfProductionExpectedYieldApi.md#sysmeansofproductionexpectedyieldget) | **GET** /sysapi/v1.0/meansofproductionexpectedyield/{meansOfProductionId} | Verkrijg verwacht af te rekenen verbruik en aantal contracten op basis van MeansOfProductionId
*SysMeansOfProductionReservationsApi* | [**sysMeansOfProductionReservationsGet**](docs/Api/SysMeansOfProductionReservationsApi.md#sysmeansofproductionreservationsget) | **GET** /sysapi/v1.0/meansofproductions/{meansOfProductionId}/reservations | Haal reservations op op basis van MeansOfProductionId
*SysMeansOfProductionsApi* | [**sysMeansOfProductionsGetAll**](docs/Api/SysMeansOfProductionsApi.md#sysmeansofproductionsgetall) | **GET** /sysapi/v1.0/meansofproductions | Opvragen productiemiddelen.
*SysMeansOfProductionsApi* | [**sysMeansOfProductionsGetByMeansOfProductionConnectionId**](docs/Api/SysMeansOfProductionsApi.md#sysmeansofproductionsgetbymeansofproductionconnectionid) | **GET** /sysapi/v1.0/meansofproductions/{meansOfProductionId}/connections/{meansOfProductionConnectionId} | Opvragen van een productiemiddelaansluiting voor een productiemiddel aan de hand van een productiemiddelaansluiting id
*SysMeansOfProductionsApi* | [**sysMeansOfProductionsGetContractPropsal**](docs/Api/SysMeansOfProductionsApi.md#sysmeansofproductionsgetcontractpropsal) | **GET** /sysapi/v1.0/meansofproductions/{meansOfProductionId}/contractproposal | Genereer een contract voorstel voor een productiemiddel
*SysMeansOfProductionsApi* | [**sysMeansOfProductionsGetMeansOfProduction**](docs/Api/SysMeansOfProductionsApi.md#sysmeansofproductionsgetmeansofproduction) | **GET** /sysapi/v1.0/organizations/{organizationId}/meansofproductions/{meansOfProductionId} | Opvragen van een productiemiddel aan de hand van het productiemiddel id
*SysMeansOfProductionsApi* | [**sysMeansOfProductionsGetMeansOfProductionConnection**](docs/Api/SysMeansOfProductionsApi.md#sysmeansofproductionsgetmeansofproductionconnection) | **GET** /sysapi/v1.0/meansofproductionconnections/{meansOfProductionConnectionId} | Opvragen van een productiemiddelaansluiting aan de hand van een productiemiddelaansluiting id
*SysMeansOfProductionsApi* | [**sysMeansOfProductionsGetMeansOfProductionConnections**](docs/Api/SysMeansOfProductionsApi.md#sysmeansofproductionsgetmeansofproductionconnections) | **GET** /sysapi/v1.0/meansofproductions/{meansOfProductionId}/connections | Opvragen productiemiddelaansluitingen van een klant
*SysMeterReadingsApi* | [**sysMeterReadingsCalculateAnnualStandardUsage**](docs/Api/SysMeterReadingsApi.md#sysmeterreadingscalculateannualstandardusage) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/calculateannualstandardusage | Bereken het standaard jaarverbruik (SJV) / Annual Standard Usage
*SysMeterReadingsApi* | [**sysMeterReadingsCalculatedMeterReading**](docs/Api/SysMeterReadingsApi.md#sysmeterreadingscalculatedmeterreading) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/calculatedmeterreading | Meterstand berekenen voor een bepaalde datum
*SysMeterReadingsApi* | [**sysMeterReadingsDeleteUsableMeterReading**](docs/Api/SysMeterReadingsApi.md#sysmeterreadingsdeleteusablemeterreading) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meterreadings/{meterReadingId} | Verwijderen van een meteropname/meterstand behorende bij een aansluiting
*SysMeterReadingsApi* | [**sysMeterReadingsGetMeterReadingById**](docs/Api/SysMeterReadingsApi.md#sysmeterreadingsgetmeterreadingbyid) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meterreadings/{meterReadingId} | Meteropname opvragen aan de hand van een meter reading Id.
*SysMeterReadingsApi* | [**sysMeterReadingsGetUsableMeterReadings**](docs/Api/SysMeterReadingsApi.md#sysmeterreadingsgetusablemeterreadings) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meterreadings | Meerdere (bruikbare) meteropnames/meterstanden opvragen gerelateerd aan een aansluiting.  De niet bruikbare meteropnames zijn in de GUI zichtbaar als &#39;Niet gebruikt&#39;.
*SysMeterReadingsApi* | [**sysMeterReadingsPostNewMeterReading**](docs/Api/SysMeterReadingsApi.md#sysmeterreadingspostnewmeterreading) | **POST** /sysapi/v1.0/meterreadings | Meteropname insturen.
*SysMeteringPointsApi* | [**sysMeteringPointsCERPreNotifyContract**](docs/Api/SysMeteringPointsApi.md#sysmeteringpointscerprenotifycontract) | **POST** /sysapi/v1.0/meteringpoints/{ean}/cerprenotifycontract | Contract in CER aanmelden
*SysMeteringPointsApi* | [**sysMeteringPointsCreateClientKey**](docs/Api/SysMeteringPointsApi.md#sysmeteringpointscreateclientkey) | **POST** /sysapi/v1.0/meteringpoints/{ean}/clientkeys | Toevoegen van klantsleutels  aan het C-AR
*SysMeteringPointsApi* | [**sysMeteringPointsGet**](docs/Api/SysMeteringPointsApi.md#sysmeteringpointsget) | **GET** /sysapi/v1.0/meteringpoints/{ean} | Opvragen van aansluitingdetails uit het C-AR
*SysMeteringPointsApi* | [**sysMeteringPointsGetProposalMeteringPoint**](docs/Api/SysMeteringPointsApi.md#sysmeteringpointsgetproposalmeteringpoint) | **GET** /sysapi/v1.0/proposalmeteringpoints/{ean} | Opvragen van aansluitingdetails uit het C-AR tijdens het offerte-traject
*SysMeteringPointsApi* | [**sysMeteringPointsSearch**](docs/Api/SysMeteringPointsApi.md#sysmeteringpointssearch) | **GET** /sysapi/v1.0/meteringpoints/search | Zoeken van aansluitingen in het C-AR
*SysMetersApi* | [**sysMetersGet**](docs/Api/SysMetersApi.md#sysmetersget) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meters | Haal alle meters op van een aansluiting
*SysOpenMeasurementDataApi* | [**sysOpenMeasurementDataGet**](docs/Api/SysOpenMeasurementDataApi.md#sysopenmeasurementdataget) | **GET** /sysapi/v1.0/OpenMeasurementData/{ean} | 
*SysOrganizationEventApi* | [**sysOrganizationEventGetFirstPossibleEventDate**](docs/Api/SysOrganizationEventApi.md#sysorganizationeventgetfirstpossibleeventdate) | **GET** /sysapi/v1.0/events/minimumeventdate | Bepaal eerstmogelijke eventdatum op basis van een gewenste eventdatum
*SysOrganizationEventApi* | [**sysOrganizationEventGetMeterReadingCollectionEvents**](docs/Api/SysOrganizationEventApi.md#sysorganizationeventgetmeterreadingcollectionevents) | **GET** /sysapi/v1.0/organizations/{organizationId}/meterreadingcollectionevents | Opvragen van Meteropname opvraag events voor een klant
*SysOrganizationsApi* | [**sysOrganizationsGetByClientReference**](docs/Api/SysOrganizationsApi.md#sysorganizationsgetbyclientreference) | **GET** /sysapi/v1.0/organizations/byClientReference/{clientReference} | Verkrijg klantgegevens op basis van een klantreferentie
*SysOrganizationsApi* | [**sysOrganizationsGetByIdOrReference**](docs/Api/SysOrganizationsApi.md#sysorganizationsgetbyidorreference) | **GET** /sysapi/v1.0/organizations/{organizationId} | Haal specifieke klant op (op basis van OrganizationId)
*SysOrganizationsApi* | [**sysOrganizationsGetByReferenceNew**](docs/Api/SysOrganizationsApi.md#sysorganizationsgetbyreferencenew) | **GET** /sysapi/v1.0/organizations/byReference/{reference} | Verkrijg klantgegevens op basis van een klantnummer
*SysOrganizationsApi* | [**sysOrganizationsPost**](docs/Api/SysOrganizationsApi.md#sysorganizationspost) | **POST** /sysapi/v1.0/organizations | Klant aanmaken
*SysOrganizationsApi* | [**sysOrganizationsPut**](docs/Api/SysOrganizationsApi.md#sysorganizationsput) | **PUT** /sysapi/v1.0/organizations/{organizationId} | Klant wijzigen
*SysOrganizationsApi* | [**sysOrganizationsSearch**](docs/Api/SysOrganizationsApi.md#sysorganizationssearch) | **GET** /sysapi/v1.0/organizations/search | Klanten zoeken
*SysP4MeterReadingsApi* | [**sysP4MeterReadingsGetByConnectionId**](docs/Api/SysP4MeterReadingsApi.md#sysp4meterreadingsgetbyconnectionid) | **GET** /sysapi/v1.0/P4MeterReadings/{connectionId} | Get readings voor connectieId, type en periode.
*SysP4MeterReadingsApi* | [**sysP4MeterReadingsGetByEan**](docs/Api/SysP4MeterReadingsApi.md#sysp4meterreadingsgetbyean) | **GET** /sysapi/v1.0/P4MeterReadings | Get readings voor ean, type en periode.
*SysP4MeterReadingsApi* | [**sysP4MeterReadingsGetByReadingIds**](docs/Api/SysP4MeterReadingsApi.md#sysp4meterreadingsgetbyreadingids) | **GET** /sysapi/v1.0/P4MeterReadings/readingIds/{type} | Get readings op basis van p4readingIds.
*SysPeriodicCostEventLogsApi* | [**sysPeriodicCostEventLogsGet**](docs/Api/SysPeriodicCostEventLogsApi.md#sysperiodiccosteventlogsget) | **GET** /sysapi/v1.0/organizations/{organizationId}/periodiccosteventlogs | 
*SysProductGroupsApi* | [**sysProductGroupsGet**](docs/Api/SysProductGroupsApi.md#sysproductgroupsget) | **GET** /sysapi/v1.0/organizations/{organizationId}/productGroups | 
*SysProductUnitUsagesApi* | [**sysProductUnitUsagesDeleteProductUnitUsages**](docs/Api/SysProductUnitUsagesApi.md#sysproductunitusagesdeleteproductunitusages) | **DELETE** /sysapi/v1.0/productunits/{productUnitId}/usages/startdate/{startDate}/enddate/{endDate} | Verwijderen verbruik/opwek voor productunit
*SysProductUnitUsagesApi* | [**sysProductUnitUsagesGetProductUnitUsages**](docs/Api/SysProductUnitUsagesApi.md#sysproductunitusagesgetproductunitusages) | **GET** /sysapi/v1.0/productunits/{productUnitId}/usages/startdate/{startDate}/enddate/{endDate} | Opvragen verbruik/opwek voor productunit
*SysProductUnitUsagesApi* | [**sysProductUnitUsagesPost**](docs/Api/SysProductUnitUsagesApi.md#sysproductunitusagespost) | **POST** /sysapi/v1.0/organizations/{organizationId}/productunits/{productUnitId}/usages | Verbruik van verbruiksproduct insturen
*SysProductUnitsApi* | [**sysProductUnitsGetByOrganizationId**](docs/Api/SysProductUnitsApi.md#sysproductunitsgetbyorganizationid) | **GET** /sysapi/v1.0/organizations/{organizationId}/productunits | 
*SysProductUnitsApi* | [**sysProductUnitsGetByProductUnitId**](docs/Api/SysProductUnitsApi.md#sysproductunitsgetbyproductunitid) | **GET** /sysapi/v1.0/organizations/{organizationId}/productunits/{productUnitId} | 
*SysProductUnitsApi* | [**sysProductUnitsPost**](docs/Api/SysProductUnitsApi.md#sysproductunitspost) | **POST** /sysapi/v1.0/organizations/{organizationId}/productunits | Aanmaken van een productUnit voor een specifieke organisatie en product
*SysProductUnitsApi* | [**sysProductUnitsPostOrder**](docs/Api/SysProductUnitsApi.md#sysproductunitspostorder) | **POST** /sysapi/v1.0/organizations/{organizationId}/productunits/Order | 
*SysProductUnitsApi* | [**sysProductUnitsPostOrderNew**](docs/Api/SysProductUnitsApi.md#sysproductunitspostordernew) | **POST** /sysapi/v1.0/organizations/{organizationId}/productunits/orderproductunits | 
*SysProfilesApi* | [**sysProfilesAddRowsToCustomProfile**](docs/Api/SysProfilesApi.md#sysprofilesaddrowstocustomprofile) | **POST** /sysapi/v1.0/customprofiles/{profileId}/rows | Voeg profielfracties toe aan een bestaand maatwerkprofiel
*SysProfilesApi* | [**sysProfilesCreateCustomProfile**](docs/Api/SysProfilesApi.md#sysprofilescreatecustomprofile) | **POST** /sysapi/v1.0/customprofiles | Aanmaken van een nieuw maatwerkprofiel
*SysProfilesApi* | [**sysProfilesGetActiveProfiles**](docs/Api/SysProfilesApi.md#sysprofilesgetactiveprofiles) | **GET** /sysapi/v1.0/customprofiles | Haal alle actieve maatwerkprofielen op
*SysProfilesApi* | [**sysProfilesGetCustomProfile**](docs/Api/SysProfilesApi.md#sysprofilesgetcustomprofile) | **GET** /sysapi/v1.0/customprofiles/{profileId} | Haal een maatwerkprofiel op op basis van een id
*SysPropositionsApi* | [**sysPropositionsEnd**](docs/Api/SysPropositionsApi.md#syspropositionsend) | **PUT** /sysapi/v1.0/propositions/{propositionId}/end | Set de einddatum zodat de propositie beeindigd wordt.
*SysPropositionsApi* | [**sysPropositionsFilter**](docs/Api/SysPropositionsApi.md#syspropositionsfilter) | **GET** /sysapi/v1.0/propositions/filter | Opvragen van proposities op basis van productid
*SysPropositionsApi* | [**sysPropositionsGet**](docs/Api/SysPropositionsApi.md#syspropositionsget) | **GET** /sysapi/v1.0/meansofproductions/{meansOfProductionId}/propositions | Opvragen Meelift proposities van een productiemiddel.
*SysPropositionsApi* | [**sysPropositionsGetPropositionPrices**](docs/Api/SysPropositionsApi.md#syspropositionsgetpropositionprices) | **GET** /sysapi/v1.0/propositionprices | Opvragen alle prijzen behorend bij een propositie
*SysPropositionsApi* | [**sysPropositionsPost**](docs/Api/SysPropositionsApi.md#syspropositionspost) | **POST** /sysapi/v1.0/propositions | Aanmaken van een propositie
*SysPropositionsApi* | [**sysPropositionsPrices**](docs/Api/SysPropositionsApi.md#syspropositionsprices) | **POST** /sysapi/v1.0/propositions/{propositionId}/prices | Aanmaken van de prijzen behorend bij een propositie
*SysRepresentativeApi* | [**sysRepresentativeDelete**](docs/Api/SysRepresentativeApi.md#sysrepresentativedelete) | **DELETE** /sysapi/v1.0/representatives/{representativeId} | Verwijderen van een verkoper
*SysRepresentativeApi* | [**sysRepresentativeGet**](docs/Api/SysRepresentativeApi.md#sysrepresentativeget) | **GET** /sysapi/v1.0/representatives | Opvragen verkopers
*SysRepresentativeApi* | [**sysRepresentativePost**](docs/Api/SysRepresentativeApi.md#sysrepresentativepost) | **POST** /sysapi/v1.0/representatives | Aanmaken van een verkoper
*SysRepresentativeApi* | [**sysRepresentativePut**](docs/Api/SysRepresentativeApi.md#sysrepresentativeput) | **PUT** /sysapi/v1.0/representatives/{representativeId} | Wijzigen van een verkoper
*SysResellerApi* | [**sysResellerGetContractPrices**](docs/Api/SysResellerApi.md#sysresellergetcontractprices) | **GET** /sysapi/v1.0/reseller/organizations/{organizationId}/proposedcontracts/{contractId}/prices | Verkrijg de prijzen van alle prijscomponenten van offertes
*SysResellerApi* | [**sysResellerGetContracts**](docs/Api/SysResellerApi.md#sysresellergetcontracts) | **GET** /sysapi/v1.0/reseller/{resellerOrganizationId}/contracts | Verkrijg de contracten van een wederverkoper
*SysResellerApi* | [**sysResellerGetOrganizations**](docs/Api/SysResellerApi.md#sysresellergetorganizations) | **GET** /sysapi/v1.0/reseller/resellerorganizations/{resellerOrganizationId}/organizations | Verkrijg de klanten van een wederverkoper
*SysResellerApi* | [**sysResellerGetProposedContracts**](docs/Api/SysResellerApi.md#sysresellergetproposedcontracts) | **GET** /sysapi/v1.0/reseller/resellerorganizations/{resellerOrganizationId}/proposedcontracts | Verkrijg offerte contracten
*SysResellerApi* | [**sysResellerPostContract**](docs/Api/SysResellerApi.md#sysresellerpostcontract) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/proposedcontracts | Post contract
*SysResellerApi* | [**sysResellerPostContractPrices**](docs/Api/SysResellerApi.md#sysresellerpostcontractprices) | **POST** /sysapi/v1.0/reseller/contracts/{contractId}/addresellerprices | Toevoegen van reseller prijzen per contract
*SysResellerApi* | [**sysResellerPostContractProposalApproved**](docs/Api/SysResellerApi.md#sysresellerpostcontractproposalapproved) | **POST** /sysapi/v1.0/reseller/contracts/{contractId}/approveproposal | Post contract proposal approved
*SysResellerApi* | [**sysResellerSearch**](docs/Api/SysResellerApi.md#sysresellersearch) | **GET** /sysapi/v1.0/reseller/search | Verkrijg de wederverkopers
*SysReservationApi* | [**sysReservationGetAnnualStandardUsageReservationResults**](docs/Api/SysReservationApi.md#sysreservationgetannualstandardusagereservationresults) | **GET** /sysapi/v1.0/propositions/{propositionReference}/reservations | Ophalen van SJV voor alle aansluitingen behorend bij een propositie referentie
*SysServiceContractApi* | [**sysServiceContractGetServiceContract**](docs/Api/SysServiceContractApi.md#sysservicecontractgetservicecontract) | **GET** /sysapi/v1.0/organizations/{organizationId}/servicecontracts/{contractId} | 
*SysSmartDevicesApi* | [**sysSmartDevicesGetSmartChargingSessions**](docs/Api/SysSmartDevicesApi.md#syssmartdevicesgetsmartchargingsessions) | **GET** /sysapi/v1.0/organizations/{organizationId}/smartdevices/{deviceId}/smartchargingsessions | Verkrijg slimme laadsessies per apparaat
*SysSmartDevicesApi* | [**sysSmartDevicesGetSmartDevices**](docs/Api/SysSmartDevicesApi.md#syssmartdevicesgetsmartdevices) | **GET** /sysapi/v1.0/organizations/{organizationId}/smartdevices | Verkrijg slimme apparaten van organisatie
*SysTelemetryApi* | [**sysTelemetryGetMeansOfProductionTelemetryById**](docs/Api/SysTelemetryApi.md#systelemetrygetmeansofproductiontelemetrybyid) | **GET** /sysapi/v1.0/telemetryreadings/meansofproductionconnection/{id} | Opvragen telemetrie van productiemiddel door middel van het ID van de aansluiting
*SysTelemetryApi* | [**sysTelemetryGetTelemetry**](docs/Api/SysTelemetryApi.md#systelemetrygettelemetry) | **GET** /sysapi/v1.0/telemetryreadings/{ean} | Opvragen telemetrie aan de hand van een EAN
*SysTriggerProcessLogsApi* | [**sysTriggerProcessLogsGet**](docs/Api/SysTriggerProcessLogsApi.md#systriggerprocesslogsget) | **GET** /sysapi/v1.0/triggerprocesslogs | 
*SysValidateMeterReadingApi* | [**sysValidateMeterReadingPost**](docs/Api/SysValidateMeterReadingApi.md#sysvalidatemeterreadingpost) | **POST** /sysapi/v1.0/validatemeterreading | 


## Documentation For Models

 - [EcedoERPCRMInterfaceApiAPIProcessLogPostData](docs/Model/EcedoERPCRMInterfaceApiAPIProcessLogPostData.md)
 - [EcedoERPCRMInterfaceApiAddRenewedEvChargeCardContractPostData](docs/Model/EcedoERPCRMInterfaceApiAddRenewedEvChargeCardContractPostData.md)
 - [EcedoERPCRMInterfaceApiAddress](docs/Model/EcedoERPCRMInterfaceApiAddress.md)
 - [EcedoERPCRMInterfaceApiAddressPostData](docs/Model/EcedoERPCRMInterfaceApiAddressPostData.md)
 - [EcedoERPCRMInterfaceApiAdvanceAgreedPaymentPerConnection](docs/Model/EcedoERPCRMInterfaceApiAdvanceAgreedPaymentPerConnection.md)
 - [EcedoERPCRMInterfaceApiAdvancePayment](docs/Model/EcedoERPCRMInterfaceApiAdvancePayment.md)
 - [EcedoERPCRMInterfaceApiAdvancePaymentPerConnection](docs/Model/EcedoERPCRMInterfaceApiAdvancePaymentPerConnection.md)
 - [EcedoERPCRMInterfaceApiAdvancePaymentPostData](docs/Model/EcedoERPCRMInterfaceApiAdvancePaymentPostData.md)
 - [EcedoERPCRMInterfaceApiAdvancePaymentPutData](docs/Model/EcedoERPCRMInterfaceApiAdvancePaymentPutData.md)
 - [EcedoERPCRMInterfaceApiAdvancePaymentRow](docs/Model/EcedoERPCRMInterfaceApiAdvancePaymentRow.md)
 - [EcedoERPCRMInterfaceApiAnnualStandardUsage](docs/Model/EcedoERPCRMInterfaceApiAnnualStandardUsage.md)
 - [EcedoERPCRMInterfaceApiBillingItem](docs/Model/EcedoERPCRMInterfaceApiBillingItem.md)
 - [EcedoERPCRMInterfaceApiBillingItemGroup](docs/Model/EcedoERPCRMInterfaceApiBillingItemGroup.md)
 - [EcedoERPCRMInterfaceApiBillingItemPostData](docs/Model/EcedoERPCRMInterfaceApiBillingItemPostData.md)
 - [EcedoERPCRMInterfaceApiBillingItemPostResult](docs/Model/EcedoERPCRMInterfaceApiBillingItemPostResult.md)
 - [EcedoERPCRMInterfaceApiBillingItemPrice](docs/Model/EcedoERPCRMInterfaceApiBillingItemPrice.md)
 - [EcedoERPCRMInterfaceApiBillingItemPutData](docs/Model/EcedoERPCRMInterfaceApiBillingItemPutData.md)
 - [EcedoERPCRMInterfaceApiCalculateAnnualStandardUsagePostData](docs/Model/EcedoERPCRMInterfaceApiCalculateAnnualStandardUsagePostData.md)
 - [EcedoERPCRMInterfaceApiCalculatedMeterReading](docs/Model/EcedoERPCRMInterfaceApiCalculatedMeterReading.md)
 - [EcedoERPCRMInterfaceApiCancelFlowPostData](docs/Model/EcedoERPCRMInterfaceApiCancelFlowPostData.md)
 - [EcedoERPCRMInterfaceApiCertiQEan](docs/Model/EcedoERPCRMInterfaceApiCertiQEan.md)
 - [EcedoERPCRMInterfaceApiCertiQReport](docs/Model/EcedoERPCRMInterfaceApiCertiQReport.md)
 - [EcedoERPCRMInterfaceApiCertiqDashboardData](docs/Model/EcedoERPCRMInterfaceApiCertiqDashboardData.md)
 - [EcedoERPCRMInterfaceApiCertiqDashboardDataPerPeriod](docs/Model/EcedoERPCRMInterfaceApiCertiqDashboardDataPerPeriod.md)
 - [EcedoERPCRMInterfaceApiCertiqStatisticsPerEan](docs/Model/EcedoERPCRMInterfaceApiCertiqStatisticsPerEan.md)
 - [EcedoERPCRMInterfaceApiChangeAllocationMethodPostData](docs/Model/EcedoERPCRMInterfaceApiChangeAllocationMethodPostData.md)
 - [EcedoERPCRMInterfaceApiChargeSession](docs/Model/EcedoERPCRMInterfaceApiChargeSession.md)
 - [EcedoERPCRMInterfaceApiChargeSessionResult](docs/Model/EcedoERPCRMInterfaceApiChargeSessionResult.md)
 - [EcedoERPCRMInterfaceApiChargeSessionResultModel](docs/Model/EcedoERPCRMInterfaceApiChargeSessionResultModel.md)
 - [EcedoERPCRMInterfaceApiClientKeyCreateData](docs/Model/EcedoERPCRMInterfaceApiClientKeyCreateData.md)
 - [EcedoERPCRMInterfaceApiClientMandate](docs/Model/EcedoERPCRMInterfaceApiClientMandate.md)
 - [EcedoERPCRMInterfaceApiClientMandateResult](docs/Model/EcedoERPCRMInterfaceApiClientMandateResult.md)
 - [EcedoERPCRMInterfaceApiConnection](docs/Model/EcedoERPCRMInterfaceApiConnection.md)
 - [EcedoERPCRMInterfaceApiConnectionContract](docs/Model/EcedoERPCRMInterfaceApiConnectionContract.md)
 - [EcedoERPCRMInterfaceApiConnectionContractGroupPostResult](docs/Model/EcedoERPCRMInterfaceApiConnectionContractGroupPostResult.md)
 - [EcedoERPCRMInterfaceApiConnectionContractPrice](docs/Model/EcedoERPCRMInterfaceApiConnectionContractPrice.md)
 - [EcedoERPCRMInterfaceApiConnectionContractPrices](docs/Model/EcedoERPCRMInterfaceApiConnectionContractPrices.md)
 - [EcedoERPCRMInterfaceApiConnectionContractPropertyPostData](docs/Model/EcedoERPCRMInterfaceApiConnectionContractPropertyPostData.md)
 - [EcedoERPCRMInterfaceApiConnectionGroup](docs/Model/EcedoERPCRMInterfaceApiConnectionGroup.md)
 - [EcedoERPCRMInterfaceApiConnectionGroupContractChangePostData](docs/Model/EcedoERPCRMInterfaceApiConnectionGroupContractChangePostData.md)
 - [EcedoERPCRMInterfaceApiConnectionGroupPostData](docs/Model/EcedoERPCRMInterfaceApiConnectionGroupPostData.md)
 - [EcedoERPCRMInterfaceApiConnectionPostData](docs/Model/EcedoERPCRMInterfaceApiConnectionPostData.md)
 - [EcedoERPCRMInterfaceApiConnectionPriceGroupPostData](docs/Model/EcedoERPCRMInterfaceApiConnectionPriceGroupPostData.md)
 - [EcedoERPCRMInterfaceApiConnectionPrices](docs/Model/EcedoERPCRMInterfaceApiConnectionPrices.md)
 - [EcedoERPCRMInterfaceApiConnectionPricesConnectionPrice](docs/Model/EcedoERPCRMInterfaceApiConnectionPricesConnectionPrice.md)
 - [EcedoERPCRMInterfaceApiConnectionProperty](docs/Model/EcedoERPCRMInterfaceApiConnectionProperty.md)
 - [EcedoERPCRMInterfaceApiConnectionPropertyPostData](docs/Model/EcedoERPCRMInterfaceApiConnectionPropertyPostData.md)
 - [EcedoERPCRMInterfaceApiConnectionPutData](docs/Model/EcedoERPCRMInterfaceApiConnectionPutData.md)
 - [EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostData](docs/Model/EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostData.md)
 - [EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostDataProcessSettingsPostData](docs/Model/EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostDataProcessSettingsPostData.md)
 - [EcedoERPCRMInterfaceApiConnectorPostData](docs/Model/EcedoERPCRMInterfaceApiConnectorPostData.md)
 - [EcedoERPCRMInterfaceApiContract](docs/Model/EcedoERPCRMInterfaceApiContract.md)
 - [EcedoERPCRMInterfaceApiContractImportPostData](docs/Model/EcedoERPCRMInterfaceApiContractImportPostData.md)
 - [EcedoERPCRMInterfaceApiContractPostData](docs/Model/EcedoERPCRMInterfaceApiContractPostData.md)
 - [EcedoERPCRMInterfaceApiContractPostResult](docs/Model/EcedoERPCRMInterfaceApiContractPostResult.md)
 - [EcedoERPCRMInterfaceApiContractPrices](docs/Model/EcedoERPCRMInterfaceApiContractPrices.md)
 - [EcedoERPCRMInterfaceApiContractProperty](docs/Model/EcedoERPCRMInterfaceApiContractProperty.md)
 - [EcedoERPCRMInterfaceApiContractPropertyPostData](docs/Model/EcedoERPCRMInterfaceApiContractPropertyPostData.md)
 - [EcedoERPCRMInterfaceApiCreditInvoicePostData](docs/Model/EcedoERPCRMInterfaceApiCreditInvoicePostData.md)
 - [EcedoERPCRMInterfaceApiCreditInvoicePostDataNewAdvancePaymentInputModel](docs/Model/EcedoERPCRMInterfaceApiCreditInvoicePostDataNewAdvancePaymentInputModel.md)
 - [EcedoERPCRMInterfaceApiCustomInvoicePostData](docs/Model/EcedoERPCRMInterfaceApiCustomInvoicePostData.md)
 - [EcedoERPCRMInterfaceApiCustomInvoiceRowPostData](docs/Model/EcedoERPCRMInterfaceApiCustomInvoiceRowPostData.md)
 - [EcedoERPCRMInterfaceApiCustomPriceComponent](docs/Model/EcedoERPCRMInterfaceApiCustomPriceComponent.md)
 - [EcedoERPCRMInterfaceApiCustomProfile](docs/Model/EcedoERPCRMInterfaceApiCustomProfile.md)
 - [EcedoERPCRMInterfaceApiCustomProfilePostData](docs/Model/EcedoERPCRMInterfaceApiCustomProfilePostData.md)
 - [EcedoERPCRMInterfaceApiCustomProfileRow](docs/Model/EcedoERPCRMInterfaceApiCustomProfileRow.md)
 - [EcedoERPCRMInterfaceApiCustomProfileRowPostData](docs/Model/EcedoERPCRMInterfaceApiCustomProfileRowPostData.md)
 - [EcedoERPCRMInterfaceApiCustomProfileRowsPostData](docs/Model/EcedoERPCRMInterfaceApiCustomProfileRowsPostData.md)
 - [EcedoERPCRMInterfaceApiDeal](docs/Model/EcedoERPCRMInterfaceApiDeal.md)
 - [EcedoERPCRMInterfaceApiDebtor](docs/Model/EcedoERPCRMInterfaceApiDebtor.md)
 - [EcedoERPCRMInterfaceApiDebtorPostData](docs/Model/EcedoERPCRMInterfaceApiDebtorPostData.md)
 - [EcedoERPCRMInterfaceApiDebtorProperty](docs/Model/EcedoERPCRMInterfaceApiDebtorProperty.md)
 - [EcedoERPCRMInterfaceApiDebtorPropertyPostData](docs/Model/EcedoERPCRMInterfaceApiDebtorPropertyPostData.md)
 - [EcedoERPCRMInterfaceApiDebtorPropertyPostResult](docs/Model/EcedoERPCRMInterfaceApiDebtorPropertyPostResult.md)
 - [EcedoERPCRMInterfaceApiDocument](docs/Model/EcedoERPCRMInterfaceApiDocument.md)
 - [EcedoERPCRMInterfaceApiDraftAdvancePayment](docs/Model/EcedoERPCRMInterfaceApiDraftAdvancePayment.md)
 - [EcedoERPCRMInterfaceApiDraftAdvancePaymentPerConnection](docs/Model/EcedoERPCRMInterfaceApiDraftAdvancePaymentPerConnection.md)
 - [EcedoERPCRMInterfaceApiDraftAdvancePaymentPostData](docs/Model/EcedoERPCRMInterfaceApiDraftAdvancePaymentPostData.md)
 - [EcedoERPCRMInterfaceApiDraftAnnualStandardUsageForConnection](docs/Model/EcedoERPCRMInterfaceApiDraftAnnualStandardUsageForConnection.md)
 - [EcedoERPCRMInterfaceApiDraftBillingItem](docs/Model/EcedoERPCRMInterfaceApiDraftBillingItem.md)
 - [EcedoERPCRMInterfaceApiDraftBillingItemsForConnection](docs/Model/EcedoERPCRMInterfaceApiDraftBillingItemsForConnection.md)
 - [EcedoERPCRMInterfaceApiEditMoveFlow](docs/Model/EcedoERPCRMInterfaceApiEditMoveFlow.md)
 - [EcedoERPCRMInterfaceApiEnergieInkoopContract](docs/Model/EcedoERPCRMInterfaceApiEnergieInkoopContract.md)
 - [EcedoERPCRMInterfaceApiEnergieleveringConnectionContract](docs/Model/EcedoERPCRMInterfaceApiEnergieleveringConnectionContract.md)
 - [EcedoERPCRMInterfaceApiEnergieleveringContractPostData](docs/Model/EcedoERPCRMInterfaceApiEnergieleveringContractPostData.md)
 - [EcedoERPCRMInterfaceApiEnergieleveringContractPutData](docs/Model/EcedoERPCRMInterfaceApiEnergieleveringContractPutData.md)
 - [EcedoERPCRMInterfaceApiEntityProperty](docs/Model/EcedoERPCRMInterfaceApiEntityProperty.md)
 - [EcedoERPCRMInterfaceApiEntityPropertyValue](docs/Model/EcedoERPCRMInterfaceApiEntityPropertyValue.md)
 - [EcedoERPCRMInterfaceApiErrorMessage400](docs/Model/EcedoERPCRMInterfaceApiErrorMessage400.md)
 - [EcedoERPCRMInterfaceApiErrorMessage401](docs/Model/EcedoERPCRMInterfaceApiErrorMessage401.md)
 - [EcedoERPCRMInterfaceApiErrorMessageObject400](docs/Model/EcedoERPCRMInterfaceApiErrorMessageObject400.md)
 - [EcedoERPCRMInterfaceApiErrorMessageObject401](docs/Model/EcedoERPCRMInterfaceApiErrorMessageObject401.md)
 - [EcedoERPCRMInterfaceApiEvChargeCard](docs/Model/EcedoERPCRMInterfaceApiEvChargeCard.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardActivatePostData](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardActivatePostData.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardCdrPostData](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardCdrPostData.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardContract](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardContract.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardCreditPostData](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardCreditPostData.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardCreditPutData](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardCreditPutData.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardCreditResult](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardCreditResult.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardData](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardData.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardRegisterPostData](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardRegisterPostData.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardSession](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardSession.md)
 - [EcedoERPCRMInterfaceApiEvChargeCardsPostData](docs/Model/EcedoERPCRMInterfaceApiEvChargeCardsPostData.md)
 - [EcedoERPCRMInterfaceApiEvChargerAddress](docs/Model/EcedoERPCRMInterfaceApiEvChargerAddress.md)
 - [EcedoERPCRMInterfaceApiEvChargerCdrData](docs/Model/EcedoERPCRMInterfaceApiEvChargerCdrData.md)
 - [EcedoERPCRMInterfaceApiEvChargerCdrPostData](docs/Model/EcedoERPCRMInterfaceApiEvChargerCdrPostData.md)
 - [EcedoERPCRMInterfaceApiEvChargerConnectorData](docs/Model/EcedoERPCRMInterfaceApiEvChargerConnectorData.md)
 - [EcedoERPCRMInterfaceApiEvChargerEvsePostData](docs/Model/EcedoERPCRMInterfaceApiEvChargerEvsePostData.md)
 - [EcedoERPCRMInterfaceApiEvChargerLocationPutData](docs/Model/EcedoERPCRMInterfaceApiEvChargerLocationPutData.md)
 - [EcedoERPCRMInterfaceApiEvChargerPostData](docs/Model/EcedoERPCRMInterfaceApiEvChargerPostData.md)
 - [EcedoERPCRMInterfaceApiEvChargerPropertyData](docs/Model/EcedoERPCRMInterfaceApiEvChargerPropertyData.md)
 - [EcedoERPCRMInterfaceApiEvChargerPropertyPostData](docs/Model/EcedoERPCRMInterfaceApiEvChargerPropertyPostData.md)
 - [EcedoERPCRMInterfaceApiEvChargerPutData](docs/Model/EcedoERPCRMInterfaceApiEvChargerPutData.md)
 - [EcedoERPCRMInterfaceApiEvChargerResult](docs/Model/EcedoERPCRMInterfaceApiEvChargerResult.md)
 - [EcedoERPCRMInterfaceApiEvChargerServiceContractData](docs/Model/EcedoERPCRMInterfaceApiEvChargerServiceContractData.md)
 - [EcedoERPCRMInterfaceApiEvChargerServiceContractPostData](docs/Model/EcedoERPCRMInterfaceApiEvChargerServiceContractPostData.md)
 - [EcedoERPCRMInterfaceApiEvChargerServiceContractPostDataBase](docs/Model/EcedoERPCRMInterfaceApiEvChargerServiceContractPostDataBase.md)
 - [EcedoERPCRMInterfaceApiEvChargerStatusPostData](docs/Model/EcedoERPCRMInterfaceApiEvChargerStatusPostData.md)
 - [EcedoERPCRMInterfaceApiEvchargerContractData](docs/Model/EcedoERPCRMInterfaceApiEvchargerContractData.md)
 - [EcedoERPCRMInterfaceApiEvseContractPostData](docs/Model/EcedoERPCRMInterfaceApiEvseContractPostData.md)
 - [EcedoERPCRMInterfaceApiEvseData](docs/Model/EcedoERPCRMInterfaceApiEvseData.md)
 - [EcedoERPCRMInterfaceApiEvsePostData](docs/Model/EcedoERPCRMInterfaceApiEvsePostData.md)
 - [EcedoERPCRMInterfaceApiEvsePropertyData](docs/Model/EcedoERPCRMInterfaceApiEvsePropertyData.md)
 - [EcedoERPCRMInterfaceApiEvsePropertyPutData](docs/Model/EcedoERPCRMInterfaceApiEvsePropertyPutData.md)
 - [EcedoERPCRMInterfaceApiExpectedAnnualStandardUsage](docs/Model/EcedoERPCRMInterfaceApiExpectedAnnualStandardUsage.md)
 - [EcedoERPCRMInterfaceApiExpectedAnnualStandardUsagePostData](docs/Model/EcedoERPCRMInterfaceApiExpectedAnnualStandardUsagePostData.md)
 - [EcedoERPCRMInterfaceApiExpectedYield](docs/Model/EcedoERPCRMInterfaceApiExpectedYield.md)
 - [EcedoERPCRMInterfaceApiExtendedMeter](docs/Model/EcedoERPCRMInterfaceApiExtendedMeter.md)
 - [EcedoERPCRMInterfaceApiExtendedMeteringPoint](docs/Model/EcedoERPCRMInterfaceApiExtendedMeteringPoint.md)
 - [EcedoERPCRMInterfaceApiFullEvChargerResult](docs/Model/EcedoERPCRMInterfaceApiFullEvChargerResult.md)
 - [EcedoERPCRMInterfaceApiGdprOrganization](docs/Model/EcedoERPCRMInterfaceApiGdprOrganization.md)
 - [EcedoERPCRMInterfaceApiGenerateDocumentPostData](docs/Model/EcedoERPCRMInterfaceApiGenerateDocumentPostData.md)
 - [EcedoERPCRMInterfaceApiGreeningOption](docs/Model/EcedoERPCRMInterfaceApiGreeningOption.md)
 - [EcedoERPCRMInterfaceApiImbalanceFdrPostData](docs/Model/EcedoERPCRMInterfaceApiImbalanceFdrPostData.md)
 - [EcedoERPCRMInterfaceApiInvoice](docs/Model/EcedoERPCRMInterfaceApiInvoice.md)
 - [EcedoERPCRMInterfaceApiInvoiceRowSummaryDto](docs/Model/EcedoERPCRMInterfaceApiInvoiceRowSummaryDto.md)
 - [EcedoERPCRMInterfaceApiInvoiceRowTotalsDto](docs/Model/EcedoERPCRMInterfaceApiInvoiceRowTotalsDto.md)
 - [EcedoERPCRMInterfaceApiInvoiceUsageCalculationRow](docs/Model/EcedoERPCRMInterfaceApiInvoiceUsageCalculationRow.md)
 - [EcedoERPCRMInterfaceApiInvoicesDataSetSummaryDto](docs/Model/EcedoERPCRMInterfaceApiInvoicesDataSetSummaryDto.md)
 - [EcedoERPCRMInterfaceApiMarketPrice](docs/Model/EcedoERPCRMInterfaceApiMarketPrice.md)
 - [EcedoERPCRMInterfaceApiMeansOfProduction](docs/Model/EcedoERPCRMInterfaceApiMeansOfProduction.md)
 - [EcedoERPCRMInterfaceApiMeansOfProductionCertiqDashboardData](docs/Model/EcedoERPCRMInterfaceApiMeansOfProductionCertiqDashboardData.md)
 - [EcedoERPCRMInterfaceApiMeansOfProductionCertiqTransactions](docs/Model/EcedoERPCRMInterfaceApiMeansOfProductionCertiqTransactions.md)
 - [EcedoERPCRMInterfaceApiMeansOfProductionConnection](docs/Model/EcedoERPCRMInterfaceApiMeansOfProductionConnection.md)
 - [EcedoERPCRMInterfaceApiMeeliftConnectionContract](docs/Model/EcedoERPCRMInterfaceApiMeeliftConnectionContract.md)
 - [EcedoERPCRMInterfaceApiMeeliftContract](docs/Model/EcedoERPCRMInterfaceApiMeeliftContract.md)
 - [EcedoERPCRMInterfaceApiMeter](docs/Model/EcedoERPCRMInterfaceApiMeter.md)
 - [EcedoERPCRMInterfaceApiMeterReading](docs/Model/EcedoERPCRMInterfaceApiMeterReading.md)
 - [EcedoERPCRMInterfaceApiMeterReadingBase](docs/Model/EcedoERPCRMInterfaceApiMeterReadingBase.md)
 - [EcedoERPCRMInterfaceApiMeterReadingCollectionEvent](docs/Model/EcedoERPCRMInterfaceApiMeterReadingCollectionEvent.md)
 - [EcedoERPCRMInterfaceApiMeterReadingPostData](docs/Model/EcedoERPCRMInterfaceApiMeterReadingPostData.md)
 - [EcedoERPCRMInterfaceApiMeteringPoint](docs/Model/EcedoERPCRMInterfaceApiMeteringPoint.md)
 - [EcedoERPCRMInterfaceApiMoveConnectionsConnectionGroupPostData](docs/Model/EcedoERPCRMInterfaceApiMoveConnectionsConnectionGroupPostData.md)
 - [EcedoERPCRMInterfaceApiMoveConnectionsConnectionGroupPostResult](docs/Model/EcedoERPCRMInterfaceApiMoveConnectionsConnectionGroupPostResult.md)
 - [EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostConnectionData](docs/Model/EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostConnectionData.md)
 - [EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostData](docs/Model/EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostData.md)
 - [EcedoERPCRMInterfaceApiOnbalansFlexContract](docs/Model/EcedoERPCRMInterfaceApiOnbalansFlexContract.md)
 - [EcedoERPCRMInterfaceApiOnbalansFlexContractPostData](docs/Model/EcedoERPCRMInterfaceApiOnbalansFlexContractPostData.md)
 - [EcedoERPCRMInterfaceApiOnbalansFlexContractPostResult](docs/Model/EcedoERPCRMInterfaceApiOnbalansFlexContractPostResult.md)
 - [EcedoERPCRMInterfaceApiOnbalansFlexContractPutData](docs/Model/EcedoERPCRMInterfaceApiOnbalansFlexContractPutData.md)
 - [EcedoERPCRMInterfaceApiOpenMeasurementData](docs/Model/EcedoERPCRMInterfaceApiOpenMeasurementData.md)
 - [EcedoERPCRMInterfaceApiOpenMeasurementDetailData](docs/Model/EcedoERPCRMInterfaceApiOpenMeasurementDetailData.md)
 - [EcedoERPCRMInterfaceApiOrganization](docs/Model/EcedoERPCRMInterfaceApiOrganization.md)
 - [EcedoERPCRMInterfaceApiOrganizationEvent](docs/Model/EcedoERPCRMInterfaceApiOrganizationEvent.md)
 - [EcedoERPCRMInterfaceApiOrganizationPostData](docs/Model/EcedoERPCRMInterfaceApiOrganizationPostData.md)
 - [EcedoERPCRMInterfaceApiOrganizationPostDataProcessSettingsPostData](docs/Model/EcedoERPCRMInterfaceApiOrganizationPostDataProcessSettingsPostData.md)
 - [EcedoERPCRMInterfaceApiOrganizationPostResult](docs/Model/EcedoERPCRMInterfaceApiOrganizationPostResult.md)
 - [EcedoERPCRMInterfaceApiOrganizationSearchResult](docs/Model/EcedoERPCRMInterfaceApiOrganizationSearchResult.md)
 - [EcedoERPCRMInterfaceApiOutboundEntityRevision](docs/Model/EcedoERPCRMInterfaceApiOutboundEntityRevision.md)
 - [EcedoERPCRMInterfaceApiP4MeterReading](docs/Model/EcedoERPCRMInterfaceApiP4MeterReading.md)
 - [EcedoERPCRMInterfaceApiP4MeterReadings](docs/Model/EcedoERPCRMInterfaceApiP4MeterReadings.md)
 - [EcedoERPCRMInterfaceApiPassiveFlexSession](docs/Model/EcedoERPCRMInterfaceApiPassiveFlexSession.md)
 - [EcedoERPCRMInterfaceApiPassiveImbalanceFdrPostData](docs/Model/EcedoERPCRMInterfaceApiPassiveImbalanceFdrPostData.md)
 - [EcedoERPCRMInterfaceApiPeriodicCostEventLog](docs/Model/EcedoERPCRMInterfaceApiPeriodicCostEventLog.md)
 - [EcedoERPCRMInterfaceApiPerson](docs/Model/EcedoERPCRMInterfaceApiPerson.md)
 - [EcedoERPCRMInterfaceApiPersonPostData](docs/Model/EcedoERPCRMInterfaceApiPersonPostData.md)
 - [EcedoERPCRMInterfaceApiPreNotifyContractProcessSettings](docs/Model/EcedoERPCRMInterfaceApiPreNotifyContractProcessSettings.md)
 - [EcedoERPCRMInterfaceApiPriceGroupPostData](docs/Model/EcedoERPCRMInterfaceApiPriceGroupPostData.md)
 - [EcedoERPCRMInterfaceApiPricePostData](docs/Model/EcedoERPCRMInterfaceApiPricePostData.md)
 - [EcedoERPCRMInterfaceApiPricesPostData](docs/Model/EcedoERPCRMInterfaceApiPricesPostData.md)
 - [EcedoERPCRMInterfaceApiProducerSwitchPostData](docs/Model/EcedoERPCRMInterfaceApiProducerSwitchPostData.md)
 - [EcedoERPCRMInterfaceApiProductGroup](docs/Model/EcedoERPCRMInterfaceApiProductGroup.md)
 - [EcedoERPCRMInterfaceApiProductUnit](docs/Model/EcedoERPCRMInterfaceApiProductUnit.md)
 - [EcedoERPCRMInterfaceApiProductUnitContract](docs/Model/EcedoERPCRMInterfaceApiProductUnitContract.md)
 - [EcedoERPCRMInterfaceApiProductUnitContractPostData](docs/Model/EcedoERPCRMInterfaceApiProductUnitContractPostData.md)
 - [EcedoERPCRMInterfaceApiProductUnitOrderPostData](docs/Model/EcedoERPCRMInterfaceApiProductUnitOrderPostData.md)
 - [EcedoERPCRMInterfaceApiProductUnitPostData](docs/Model/EcedoERPCRMInterfaceApiProductUnitPostData.md)
 - [EcedoERPCRMInterfaceApiProductUnitPostResult](docs/Model/EcedoERPCRMInterfaceApiProductUnitPostResult.md)
 - [EcedoERPCRMInterfaceApiProductUnitUsage](docs/Model/EcedoERPCRMInterfaceApiProductUnitUsage.md)
 - [EcedoERPCRMInterfaceApiProductUnitUsageGetData](docs/Model/EcedoERPCRMInterfaceApiProductUnitUsageGetData.md)
 - [EcedoERPCRMInterfaceApiProductUnitUsagePostData](docs/Model/EcedoERPCRMInterfaceApiProductUnitUsagePostData.md)
 - [EcedoERPCRMInterfaceApiProposalMeteringPoint](docs/Model/EcedoERPCRMInterfaceApiProposalMeteringPoint.md)
 - [EcedoERPCRMInterfaceApiProposition](docs/Model/EcedoERPCRMInterfaceApiProposition.md)
 - [EcedoERPCRMInterfaceApiPropositionPostData](docs/Model/EcedoERPCRMInterfaceApiPropositionPostData.md)
 - [EcedoERPCRMInterfaceApiPropositionPostResult](docs/Model/EcedoERPCRMInterfaceApiPropositionPostResult.md)
 - [EcedoERPCRMInterfaceApiPropositionPrice](docs/Model/EcedoERPCRMInterfaceApiPropositionPrice.md)
 - [EcedoERPCRMInterfaceApiRepresentative](docs/Model/EcedoERPCRMInterfaceApiRepresentative.md)
 - [EcedoERPCRMInterfaceApiRepresentativeBase](docs/Model/EcedoERPCRMInterfaceApiRepresentativeBase.md)
 - [EcedoERPCRMInterfaceApiRepresentativePostData](docs/Model/EcedoERPCRMInterfaceApiRepresentativePostData.md)
 - [EcedoERPCRMInterfaceApiRepresentativePostResult](docs/Model/EcedoERPCRMInterfaceApiRepresentativePostResult.md)
 - [EcedoERPCRMInterfaceApiRepresentativePutData](docs/Model/EcedoERPCRMInterfaceApiRepresentativePutData.md)
 - [EcedoERPCRMInterfaceApiResellerContract](docs/Model/EcedoERPCRMInterfaceApiResellerContract.md)
 - [EcedoERPCRMInterfaceApiResellerContractPostData](docs/Model/EcedoERPCRMInterfaceApiResellerContractPostData.md)
 - [EcedoERPCRMInterfaceApiResellerContractPricePostData](docs/Model/EcedoERPCRMInterfaceApiResellerContractPricePostData.md)
 - [EcedoERPCRMInterfaceApiResellerOrganization](docs/Model/EcedoERPCRMInterfaceApiResellerOrganization.md)
 - [EcedoERPCRMInterfaceApiReservation](docs/Model/EcedoERPCRMInterfaceApiReservation.md)
 - [EcedoERPCRMInterfaceApiReservationBase](docs/Model/EcedoERPCRMInterfaceApiReservationBase.md)
 - [EcedoERPCRMInterfaceApiSetAnnualStandardUsageTypePostData](docs/Model/EcedoERPCRMInterfaceApiSetAnnualStandardUsageTypePostData.md)
 - [EcedoERPCRMInterfaceApiSmaInvoiceDetails](docs/Model/EcedoERPCRMInterfaceApiSmaInvoiceDetails.md)
 - [EcedoERPCRMInterfaceApiSmartChargingSession](docs/Model/EcedoERPCRMInterfaceApiSmartChargingSession.md)
 - [EcedoERPCRMInterfaceApiSmartDevice](docs/Model/EcedoERPCRMInterfaceApiSmartDevice.md)
 - [EcedoERPCRMInterfaceApiTriggerProcessLog](docs/Model/EcedoERPCRMInterfaceApiTriggerProcessLog.md)
 - [EcedoERPCRMInterfaceApiUpdateMeteringPointPostData](docs/Model/EcedoERPCRMInterfaceApiUpdateMeteringPointPostData.md)
 - [EcedoERPCRMInterfaceApiUsageCalculationRow](docs/Model/EcedoERPCRMInterfaceApiUsageCalculationRow.md)
 - [EcedoERPCRMInterfaceApiValidateMeterReadingPostData](docs/Model/EcedoERPCRMInterfaceApiValidateMeterReadingPostData.md)
 - [EcedoERPCRMInterfaceApiValidateMeterReadingPostResult](docs/Model/EcedoERPCRMInterfaceApiValidateMeterReadingPostResult.md)
 - [EcedoERPCRMInterfaceGDPRAddress](docs/Model/EcedoERPCRMInterfaceGDPRAddress.md)
 - [EcedoERPCRMInterfaceGDPRBusiness](docs/Model/EcedoERPCRMInterfaceGDPRBusiness.md)
 - [EcedoERPCRMInterfaceGDPRConnection](docs/Model/EcedoERPCRMInterfaceGDPRConnection.md)
 - [EcedoERPCRMInterfaceGDPRConnectionProperty](docs/Model/EcedoERPCRMInterfaceGDPRConnectionProperty.md)
 - [EcedoERPCRMInterfaceGDPRConsumer](docs/Model/EcedoERPCRMInterfaceGDPRConsumer.md)
 - [EcedoERPCRMInterfaceGDPRContract](docs/Model/EcedoERPCRMInterfaceGDPRContract.md)
 - [EcedoERPCRMInterfaceGDPRDebtor](docs/Model/EcedoERPCRMInterfaceGDPRDebtor.md)
 - [EcedoERPCRMInterfaceGDPRDocument](docs/Model/EcedoERPCRMInterfaceGDPRDocument.md)
 - [EcedoERPCRMInterfaceGDPRInvoice](docs/Model/EcedoERPCRMInterfaceGDPRInvoice.md)
 - [EcedoERPCRMInterfaceGDPRMeter](docs/Model/EcedoERPCRMInterfaceGDPRMeter.md)
 - [EcedoERPCRMInterfaceGDPRMeterReading](docs/Model/EcedoERPCRMInterfaceGDPRMeterReading.md)
 - [EcedoERPCRMInterfaceGDPRPerson](docs/Model/EcedoERPCRMInterfaceGDPRPerson.md)
 - [EcedoERPCRMInterfaceGDPRProductUnit](docs/Model/EcedoERPCRMInterfaceGDPRProductUnit.md)
 - [EcedoERPCRMInterfaceGDPRReadingPosition](docs/Model/EcedoERPCRMInterfaceGDPRReadingPosition.md)
 - [EcedoERPCRMInterfaceReadModelMeterMeterReadingValidationDetail](docs/Model/EcedoERPCRMInterfaceReadModelMeterMeterReadingValidationDetail.md)
 - [EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto](docs/Model/EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto.md)
 - [EcedoERPCRMInterfaceReadModelTelemetryTelemetryDto](docs/Model/EcedoERPCRMInterfaceReadModelTelemetryTelemetryDto.md)
 - [EcedoERPCRMInterfaceReportModelOrganizationDto](docs/Model/EcedoERPCRMInterfaceReportModelOrganizationDto.md)
 - [EcedoERPCRMInterfaceServicesEDSNCERCERLookupData](docs/Model/EcedoERPCRMInterfaceServicesEDSNCERCERLookupData.md)
 - [EcedoERPCRMInterfaceServicesEDSNCERCERNoticeData](docs/Model/EcedoERPCRMInterfaceServicesEDSNCERCERNoticeData.md)
 - [EcedoERPCRMInterfaceServicesOCPIOcpiConnector](docs/Model/EcedoERPCRMInterfaceServicesOCPIOcpiConnector.md)
 - [EcedoERPCRMInterfaceServicesOCPIOcpiLocationDetails](docs/Model/EcedoERPCRMInterfaceServicesOCPIOcpiLocationDetails.md)
 - [EcedoERPUIWebControllersSysApiSysDashboardControllerDashboardDto](docs/Model/EcedoERPUIWebControllersSysApiSysDashboardControllerDashboardDto.md)


