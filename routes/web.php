<?php

use App\Http\Controllers\AnalyticsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Overviewtabcontroller;
use App\Http\Controllers\ScenarioController;
use App\Http\Controllers\AutomationController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\EmailactivityController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ImportuserController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\MicropollController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RecurringController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\SegmentslistController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SiteactivityController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserprofileController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CouponcodesController;
use App\Http\Controllers\WebpushController;
use App\Http\Controllers\ActivityfeedController;   
use App\Http\Controllers\DataimportController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\AlgorithmController;
use App\Http\Controllers\AccountinfoController;
use App\Http\Controllers\AccountsettingController;
use App\Http\Controllers\AccounthistoryController;
use App\Http\Controllers\EmailsettingController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\MyprofileController;
use App\HTTP\Controllers\BilingController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return 'Laravel is working!';
// });


Route::get('/', function () {
    return view('home.home');
});




// Route::get('/', function () {
//     return view('home.home');
// })->name('home.home');

// Route::get('/', function () {
//     return view('campaigns.campaigns');
// });

// Route::get('/', function () {
//     return view('campaigns.index');
// })->name('campaigns.campaigns');

// Routes to fetch tab contents dynamically
Route::get('/home/tabs/overview', [Overviewtabcontroller::class, 'getOverviewContent'])->name('home.tabs.overview');
Route::get('/home/tabs/getstarted', [Overviewtabcontroller::class, 'getGetStartedContent'])->name('home.tabs.getstarted');
Route::get('/home/tabs/cockpit', [Overviewtabcontroller::class, 'getCockpitContent'])->name('home.tabs.cockpit');


Route::get('/scenario/tabs/email_tab', [ScenarioController::class, 'getEmailContent'])->name('scenario.tabs.email_tab');
Route::get('/scenario/tabs/interaction_tab', [ScenarioController::class, 'getInteractionContent'])->name('scenario.tabs.interaction_tab');
Route::get('/scenario/tabs/webpush_tab', [ScenarioController::class, 'getWebpushContent'])->name('scenario.tabs.webpush_tab');
Route::get('/scenario/tabs/suurvey_tab', [ScenarioController::class, 'getSurveyContent'])->name('scenario.tabs.survey_tab');


Route::get('/automation/tabs/mycampaign_tab', [AutomationController::class, 'getMycampaignContent'])->name('automation.tabs.mycampaign_tab');
Route::get('/automation/tabs/scenarios_tab', [AutomationController::class, 'getScenariosContent'])->name('automation.tabs.scenarios_tab');



// Route::get('/newsletter/tabs/email_tab', [NewsletterController::class, 'getEmailContent'])->name('newsletter.tabs.email_tab');
// Route::get('/newsletter/tabs/push_tab', [NewsletterController::class, 'getPushContent'])->name('newsletter.tabs.push_tab');
// Route::get('/newsletter/tabs/text_tab', [NewsletterController::class, 'getTextContent'])->name('newsletter.tabs.text_tab');
// Route::get('/newsletter/tabs/whatsapp_tab', [NewsletterController::class, 'getWhatsappContent'])->name('newsletter.tabs.whatsapp_tab');

Route::get('/newsletter/tabs/email_tab', [NewsletterController::class, 'getNewsEmailContent'])->name('newsletter.tabs.news_email_tab');
Route::get('/newsletter/tabs/push_tab', [NewsletterController::class, 'getPushContent'])->name('newsletter.tabs.push_tab');
Route::get('/newsletter/tabs/text_tab', [NewsletterController::class, 'getTextContent'])->name('newsletter.tabs.text_tab');
Route::get('/newsletter/tabs/whatsapp_tab', [NewsletterController::class, 'getWhatsappContent'])->name('newsletter.tabs.whatsapp_tab');


Route::get('/recurring/tabs/recurring_email_tab', [RecurringController::class, 'getRecurringEmailContent'])->name('recurring.tabs.recurring_email_tab');
Route::get('/recurring/tabs/recurring_push_tab', [RecurringController::class, 'getRecurringPushContent'])->name('recurring.tabs.recurring_push_tab');
Route::get('/recurring/tabs/recurring_text_tab', [RecurringController::class, 'getRecurringTextContent'])->name('recurring.tabs.recurring_text_tab');
Route::get('/recurring/tabs/recurring_whatsapp_tab', [RecurringController::class, 'getRecurringWhatsappContent'])->name('recurring.tabs.recurring_whatsapp_tab');
Route::get('/recurring/tabs/recurring_scenarios_tab', [RecurringController::class, 'getRecurringScenarioContent'])->name('recurring.tabs.recurring_scenarios_tab');

Route::get('/interaction/tabs/interaction_mycampaign_tab', [InteractionController::class, 'getInteractionMycampaignContent'])->name('interaction.tabs.interaction_mycampaign_tab');
Route::get('/interaction/tabs/interaction_scenarios_tab', [InteractionController::class, 'getInteractionScenariosContent'])->name('interaction.tabs.interaction_scenarios_tab');


Route::get('/content/tabs/content_mycampaign_tab', [ContentController::class, 'getContentMyCampaignContent'])->name('content.tabs.content_mycampaign_tab');
Route::get('/content/tabs/content_scenarios_tab', [ContentController::class, 'getContentScenariosContent'])->name('content.tabs.content_scenarios_tab');



Route::get('/micropoll/tabs/micropoll_mycampaign_tab', [MicropollController::class, 'getMicropollMyCampaignContent'])->name('micropoll.tabs.micropoll_mycampaign_tab');

Route::get('/micropoll/tabs/micropoll_scenarios_tab', [MicropollController::class, 'getMicropollScenariosContent'])->name('micropoll.tabs.micropoll_scenarios_tab');



Route::get('/survey/tabs/survey_mycampaign_tab', [SurveyController::class, 'getSurveyMyCampaignContent'])->name('survey.tabs.survey_mycampaign_tab');
Route::get('/survey/tabs/survey_scenarios_tab', [SurveyController::class, 'getSurveyScenariosContent'])->name('survey.tabs.survey_scenarios_tab');



Route::get('/user/tabs/user_overview_tab', [UserController::class, 'getUserOverviewContent'])->name('user.tabs.user_overview_tab');
Route::get('/user/tabs/user_visitor_tab', [UserController::class, 'getUserVisitorContent'])->name('user.tabs.user_visitor_tab');







// Route::get('/revenue/tabs/revenue_campaign_tab', [RevenueController::class, 'getRevenueCampaignConten'])->name('revenue.tabs.revenue_campaign_tab');
// Route::get('/user/tabs/revenue_report_tab', [RevenueController::class, 'getRevenueReportContent'])->name('revenue.tabs.revenue_report_tab');



// ...existing code...

Route::prefix('revenue/tabs')->name('revenue.tabs.')->group(function () {
    Route::get('/campaign', function () {
        return view('revenue.tabs.revenue_campaign_tab');
    })->name('revenue_campaign_tab');

    Route::get('/report', function () {
        return view('revenue.tabs.revenue_report_tab');
    })->name('revenue_report_tab');
});




Route::get('/siteactivity/tabs/stats_tab', [SiteactivityController::class, 'getSitestatsContent'])->name('siteactivity.tabs.stats_tab');
Route::get('/siteactivity/tabs/exports_tab', [SiteactivityController::class, 'getSiteexportContent'])->name('siteactivity.tabs.exports_tab');
Route::get('/siteacitivity/tabs/events_tab', [SiteactivityController::class, 'getSiteeventContent'])->name('siteactivity.tabs.events_tab');
Route::get('/siteactivity/tabs/activity_tab', [SiteactivityController::class, 'getSiteactivityContent'])->name('siteactivity.tabs.activity_tab');



Route::get('/emailactivity/tabs/events_tab', [EmailactivityController::class, 'getEmaileventContent'])->name('emailactivity.tabs.events_tab');
Route::get('/emailactivity/tabs/clicks_tab', [EmailactivityController::class, 'getEmailclickContent'])->name('emailactivity.tabs.clicks_tab');


Route::get('/ecommerce/tabs/overview_tab', [EcommerceController::class, 'getEcommerceoverviewContent'])->name('ecommerce.tabs.overview_tab');
Route::get('/ecommerce/tabs/conversions_tab', [EcommerceController::class, 'getEcommerceconversionsContent'])->name('ecommerce.tabs.conversions_tab');
Route::get('/ecommerce/tabs/charts_tab', [EcommerceController::class, 'getEcommercechartContent'])->name('ecommerce.tabs.charts_tab');

Route::get('/catalog/tabs/serach_terms_tab', [CatalogController::class, 'getCatalogsearchContent'])->name('catalog.tabs.search_terms_tab');
Route::get('/catalog/tabs/items_tab', [CatalogController::class, 'getCatalogcategoryContent'])->name('catalog.tabs.items_tab');
Route::get('/catalog/tabs/category', [CatalogController::class, 'getCatalogitemsContent'])->name('catalog.tabs.category_tab');

Route::get('/segmentslists/tabs/mysegment_tab', [SegmentslistController::class, 'getSegmentlistmysegmentsContent'])->name('segmentslists.tabs.mysegment_tab');
Route::get('/segmentslists/tabs/mylist_tab', [SegmentslistController::class, 'getSegmentlistmylistsContent'])->name('segmentslists.tabs.mylist_tab');
Route::get('/segmentslists/tabs/default_tab', [SegmentslistController::class, 'getSegmentlistdefaultContent'])->name('segmentslists.tabs.default_tab');

//userprofile tabs are present but not are not present
//analyitucs tabs are present but not are not present

Route::get('/importuser/tabs/manually_add_Email_tab', [ImportuserController::class, 'getImportuseremailContent'])->name('importuser.tabs.manually_add_email_tab');
Route::get('/importuser/tabs/upload_csv_tab', [ImportuserController::class, 'getImportuseruploadContent'])->name('importuser.tabs.upload_csv_tab');



Route::get('/setting/tabs/attributes_tab', [SettingsController::class, 'getAttributeContent'])->name('setting.tabs.attributes_tab');
Route::get('/setting/tabs/opt-in_tab', [SettingsController::class, 'getOptinContent'])->name('setting.tabs.opt-in_tab');
Route::get('/setting/tabs/limits_tab', [SettingsController::class, 'getLimitsContent'])->name('setting.tabs.limits_tab');


Route::get('/setup_catalog/tabs/catalog_tab', [SetupController::class, 'getSetupCatalogContent'])->name('setup_catalog.tabs.catalog_tab');
Route::get('/setup_catalog/tabs/parsing_tab', [SetupController::class, 'getSetupparsingContent'])->name('setup_catalog.tabs.parsing_tab');
Route::get('/setup_catalog/tabs/autofeed_tab', [SetupController::class, 'getSetupautofeedContent'])->name('setup_catalog.tabs.autofeed_tab');
Route::get('/setup_catalog/tabs/datafeed_tab', [SetupController::class, 'getSetupdatafeedContent'])->name('setup_catalog.tabs.datafeed_tab');
Route::get('/setup_catalog/tabs/export_tab', [SetupController::class, 'getSetupexportcontent'])->name('setup_catalog.tabs.export_tab');
Route::get('/setup_catalog/tabs/preview_tab', [SetupController::class, 'getSetuppreviewContent'])->name('setup_catalog.tabs.preview_tab');


Route::get('/gallery/tabs/discover_tab', [GalleryController::class, 'getGallerydiscoverContent'])->name('gallery.tabs.discover_tab');
Route::get('/gallery/tabs/private_tab', [GalleryController::class, 'getGalleryprivateContent'])->name('gallery.tabs.private_tab');


Route::get('/activityfeed/tabs/flow_tab', [ActivityfeedController::class, 'getActivityfeedflowContent'])->name('activityfeed.tabs.flow_tab');
Route::get('/activityfeed/tabs/playground_tab', [ActivityfeedController::class, 'getActivityfeedplaygroundContent'])->name('activityfeed.tabs.playground_tab');


Route::get('/dataimports/tabs/oldpurchase_tab', [DataimportController::class, 'getDataimportoldpurchaseContent'])->name('dataimports.tabs.oldpurchase_tab');
Route::get('/dataimports/tabs/autoimport_tab', [DataimportController::class, 'getDataimportautoimportContent'])->name('dataimports.tabs.autoimport_tab');


Route::get('/pages/tabs/translate_tab', [PagesController::class, 'getPagestranslateContent'])->name('pages.tabs.translate_tab');
Route::get('/pages/tabs/customdomain_tab', [PagesController::class, 'getPagescustomdomainContent'])->name('pages.tabs.customdomain_tab');


Route::get('/algorithms/tabs/setting_tab', [AlgorithmController::class, 'getAlgorithmsettingContent'])->name('algorithms.tabs.setting_tab');
Route::get('/algorithms/tabs/crosssell_tab', [AlgorithmController::class, 'getAlgorithmcrosssellContent'])->name('algorithms.tabs.crosssell_tab');
Route::get('/algorithms/tabs/product_tab', [AlgorithmController::class, 'getAlgorithmproductContent'])->name('algorithms.tabs.product_tab');
Route::get('/algorithms/tabs/test_tab', [AlgorithmController::class, 'getAlgorithmtestContent'])->name('algorithms.tabs.test_tab');


Route::get('/accountinfo/tabs/info_tab', [AccountinfoController::class, 'getAccountinfoContent'])->name('accountinfo.tabs.info_tab');
Route::get('/accountinfo/tabs/notification_tab', [AccountinfoController::class, 'getAccountnotificationContent'])->name('accountinfo.tabs.notification_tab');
Route::get('/accountinfo/tabs/code_tab', [AccountinfoController::class, 'getAccountcodeContent'])->name('accountinfo.tabs.code_tab');
Route::get('/accountinfo/tabs/api_tab', [AccountinfoController::class, 'getAccountapiContent'])->name('accountinfo.tabs.api_tab');

Route::get('/accountsetting/tabs/setting_tab', [AccountsettingController::class, 'getAccountsettingContent'])->name('accountsetting.tabs.setting_tab');
Route::get('/accountsetting/tabs/jsintegration_tab', [AccountsettingController::class, 'getAccountjsintegrationContent'])->name('accountsetting.tabs.jsintegration_tab');
Route::get('/accountsetting/tabs/advance_tab', [AccountsettingController::class, 'getAccountjsadvanceContent'])->name('accountsetting.tabs.advance_tab');
Route::get('/accountsetting/tabs/tracking_tab', [AccountsettingController::class, 'getAccounttrackingContent'])->name('accountsetting.tabs.tracking_tab');


Route::get('/myprofile/tabs/profile_tab', [MyprofileController::class, 'getMyprofileContent'])->name('myprofile.tabs.profile_tab');
Route::get('/myprofile/tabs/access_tab', [MyprofileController::class, 'getMyprofileaccessContent'])->name('myprofile.tabs.access_tab');



Route::get('/biling/tabs/usage_tab', [BilingController::class, 'getBilingusageContent'])->name('biling.tabs.usage_tab');
Route::get('/biling/tabs/history_tab', [BilingController::class, 'getBilinghistoryContent'])->name('biling.tabs.history_tab');
Route::get('/biling/tabs/info_tab', [BilingController::class, 'getBilinginfoContent'])->name('biling.tabs.info_tab');













Route::get('/scenario', [scenarioController::class, 'scenario'])->name('scenario.scenario');

Route::get('/automation', [AutomationController::class, 'automation'])->name('automation.automation');

Route::get('/newsletter', [NewsletterController::class, 'newsletter'])->name('newsletter.newsletter');

Route::get('/recurring', [RecurringController::class, 'recurring'])->name('recurring.recurring');

Route::get('/interaction', [InteractionController::class, 'interaction'])->name('interaction.interaction');

Route::get('/content', [ContentController::class, 'content'])->name('content.content');

Route::get('/micropoll', [MicropollController::class, 'micropoll'])->name('micropoll.micropoll');

Route::get('/survey', [SurveyController::class, 'survey'])->name('survey.survey'); 

Route::get('/user', [UserController::class, 'user'])->name('user.user'); 

Route::get('/revenue', [RevenueController::class, 'revenue'])->name('revenue.revenue');

Route::get('/siteactivity', [SiteactivityController::class, 'siteactivity'])->name('siteactivity.siteactivity');

Route::get('/emailactivity', [EmailactivityController::class, 'emailactivity'])->name('emailactivity.emailactivity');

Route::get('/ecommerce', [EcommerceController::class, 'ecommerce'])->name('ecommerce.ecommerce');

Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog.catalog');

Route::get('/export', [ExportController::class, 'export'])->name('export.export');

Route::get('/segmentslists', [SegmentslistController::class, 'segmentslists'])->name('segmentslists.segmentslists');

Route::get('/userprofile', [UserprofileController::class, 'userprofile'])->name('userprofile.userprofile');

Route::get('/analytics', [AnalyticsController::class, 'analytics'])->name('analytics.analytics');

Route::get('/importuser', [ImportuserController::class, 'importuser'])->name('importuser.importuser');

Route::get('/setting', [SettingsController::class, 'settings'])->name('setting.settings');

Route::get('/setup', [SetupController::class, 'setup'])->name('setup_catalog.setup');

Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery.gallery');

Route::get('/couponcodes', [CouponcodesController::class, 'couponcodes'])->name('couponcodes.couponcodes');

Route::get('/webpush', [WebpushController::class, 'webpush'])->name('webpush.webpush');

Route::get('/activityfeed', [ActivityfeedController::class, 'activityfeed'])->name('activityfeed.activityfeed');

Route::get('/dataimport', [DataimportController::class, 'dataimport'])->name('dataimport.dataimport');

Route::get('/pages', [PagesController::class, 'pages'])->name('pages.pages');

Route::get('/integration', [IntegrationController::class, 'integration'])->name('integration.integration');

Route::get('/algorithms', [AlgorithmController::class, 'algorithms'])->name('algorithms.algorithms');

Route::get('/accountinfo', [AccountinfoController::class, 'accountinfo'])->name('accountinfo.accountinfo');

Route::get('/accountsetting', [AccountsettingController::class, 'accountsetting'])->name('accountsetting.accountsetting');

Route::get('/accounthistory', [AccounthistoryController::class, 'accounthistory'])->name('accounthistory.accounthistory');

Route::get('/emailsetting', [EmailsettingController::class, 'emailsetting'])->name('emailsetting.emailsetting');

Route::get('/access', [AccessController::class, 'access'])->name('access.access');

Route::get('/myprofile', [MyprofileController::class, 'myprofile'])->name('myprofile.myprofile');

Route::get('/biling', [BilingController::class, 'biling'])->name('biling.biling');