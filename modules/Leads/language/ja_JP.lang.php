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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT

    // Dashboard Names
    'LBL_LEADS_LIST_DASHBOARD' => 'リードリストのダッシュボード',
    'LBL_LEADS_RECORD_DASHBOARD' => 'リードレコードのダッシュボード',

    'ERR_DELETE_RECORD' => 'リードを削除するにはレコード番号を指定する必要があります。',
    'LBL_ACCOUNT_DESCRIPTION'=> '取引先情報',
    'LBL_ACCOUNT_ID'=>'取引先ID',
    'LBL_ACCOUNT_NAME' => '取引先:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'アクティビティ',
    'LBL_ADD_BUSINESSCARD' => '名刺から追加',
    'LBL_ADDRESS_INFORMATION' => '住所情報',
    'LBL_ALT_ADDRESS_CITY' => '別の市区町村',
    'LBL_ALT_ADDRESS_COUNTRY' => '別の国',
    'LBL_ALT_ADDRESS_POSTALCODE' => '別の郵便番号',
    'LBL_ALT_ADDRESS_STATE' => '別の都道府県',
    'LBL_ALT_ADDRESS_STREET_2' => '別の住所 2',
    'LBL_ALT_ADDRESS_STREET_3' => '別の住所 3',
    'LBL_ALT_ADDRESS_STREET' => '別の番地その他',
    'LBL_ALTERNATE_ADDRESS' => '別の住所:',
    'LBL_ANY_ADDRESS' => '住所:',
    'LBL_ANY_EMAIL' => 'Eメール:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_ASSIGNED_TO_NAME' => 'アサイン先',
    'LBL_ASSIGNED_TO_ID' => 'アサイン先:',
    'LBL_BACKTOLEADS' => 'リードへ戻る',
    'LBL_BUSINESSCARD' => 'リードのコンバート',
    'LBL_CITY' => '市区町村:',
    'LBL_CONTACT_ID' => '取引先担当者ID',
    'LBL_CONTACT_INFORMATION' => 'リードの概要',
    'LBL_CONTACT_NAME' => 'リード名:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'リード-商談:',
    'LBL_CONTACT_ROLE' => '役割:',
    'LBL_CONTACT' => 'リード:',
    'LBL_CONVERT_BUTTON_LABEL' => 'コンバート',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => '保存してコンバート',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(オプション)',
    'LBL_CONVERT_ACCESS_DENIED' => 'リードをコンバートする必要があるモジュールへの編集アクセスがありません: {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => '複製を検索しています...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => '無視して新規作成',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => '複製に戻る',
    'LBL_CONVERT_SWITCH_TO_CREATE' => '新規作成',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => '検索',
    'LBL_CONVERT_DUPLICATES_FOUND' => '{{duplicateCount}} 複製が見つかりました',
    'LBL_CONVERT_CREATE_NEW' => '新規 {{moduleName}}',
    'LBL_CONVERT_SELECT_MODULE' => '{{moduleName}} を選択',
    'LBL_CONVERT_SELECTED_MODULE' => '{{moduleName}} を選択中',
    'LBL_CONVERT_CREATE_MODULE' => '{{moduleName}} を作成',
    'LBL_CONVERT_CREATED_MODULE' => '{{moduleName}} を作成中',
    'LBL_CONVERT_RESET_PANEL' => 'リセット',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => '関連アクティビティを次にコピー',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => '関連アクティビティを次に異動',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => '関連のアクティビティを連絡先のレコードに移動します。',
    'LBL_CONVERTED_ACCOUNT'=>'コンバート済み取引先:',
    'LBL_CONVERTED_CONTACT' => 'コンバート済み取引先担当者:',
    'LBL_CONVERTED_OPP'=>'コンバート済み商談:',
    'LBL_CONVERTED'=> '変換済',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'リードのコンバート [Alt+V]',
    'LBL_CONVERTLEAD' => 'リードのコンバート',
    'LBL_CONVERTLEAD_WARNING' => '警告: コンバートしようとしているリードのステータスは「コンバート済み」になっています。取引先担当者や取引先のレコードが既に作成されている可能性があります。コンバートを継続する場合は保存ボタンをクリックしてください。',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => '重複の可能性がある取引先担当者:',
    'LBL_CONVERTLEAD_ERROR' => 'リードをコンバートできません',
    'LBL_CONVERTLEAD_FILE_WARN' => 'リード{{leadName}}のコンバートに成功しましたが、 一つかそれ以上のレコードの添付をアップロードするのに問題がありました。',
    'LBL_CONVERTLEAD_SUCCESS' => 'リード {{leadName}}のコンバートに成功しました',
    'LBL_COUNTRY' => '国:',
    'LBL_CREATED_NEW' => '新しいレコードを作成しました:',
	'LBL_CREATED_ACCOUNT' => '新しい取引先が作成されました',
    'LBL_CREATED_CALL' => '新しい電話が作成されました',
    'LBL_CREATED_CONTACT' => '新しい取引先担当者が作成されました',
    'LBL_CREATED_MEETING' => '新しい会議が作成されました',
    'LBL_CREATED_OPPORTUNITY' => '新しい商談が作成されました',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'リード',
    'LBL_DEPARTMENT' => '部署:',
    'LBL_DESCRIPTION_INFORMATION' => '詳細情報',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_DO_NOT_CALL' => '電話不可:',
    'LBL_DUPLICATE' => '類似のリード',
    'LBL_EMAIL_ADDRESS' => 'Eメール:',
    'LBL_EMAIL_OPT_OUT' => 'メール送信除外:',
    'LBL_EXISTING_ACCOUNT' => '既存の取引先を使用',
    'LBL_EXISTING_CONTACT' => '既存の取引先担当者を使用',
    'LBL_EXISTING_OPPORTUNITY' => '既存の商談を使用',
    'LBL_FAX_PHONE' => 'ファックス:',
    'LBL_FIRST_NAME' => '名:',
    'LBL_FULL_NAME' => 'フルネーム:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'履歴',
    'LBL_HOME_PHONE' => '電話 (自宅):',
    'LBL_IMPORT_VCARD' => 'vCardのインポート',
    'LBL_IMPORT_VCARD_SUCCESS' => 'vCardからリードの作成に成功しました',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'vCardをインポートすることによって新規リードを作成します。',
    'LBL_INVALID_EMAIL'=>'無効なEメール:',
    'LBL_INVITEE' => '報告メンバー',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'リードソース詳細:',
    'LBL_LEAD_SOURCE' => 'リードソース:',
    'LBL_LIST_ACCEPT_STATUS' => '出欠確認',
    'LBL_LIST_ACCOUNT_NAME' => '取引先',
    'LBL_LIST_CONTACT_NAME' => '名前',
    'LBL_LIST_CONTACT_ROLE' => '役割',
    'LBL_LIST_DATE_ENTERED' => '作成日',
    'LBL_LIST_EMAIL_ADDRESS' => 'Eメール',
    'LBL_LIST_FIRST_NAME' => '名',
    'LBL_VIEW_FORM_TITLE' => 'リードビュー',
    'LBL_LIST_FORM_TITLE' => 'リード一覧',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'リードソース詳細',
    'LBL_LIST_LEAD_SOURCE' => 'リードソース',
    'LBL_LIST_MY_LEADS' => '私のリード',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_PHONE' => '会社電話',
    'LBL_LIST_REFERED_BY' => '紹介元',
    'LBL_LIST_STATUS' => 'ステータス',
    'LBL_LIST_TITLE' => '職位',
    'LBL_MOBILE_PHONE' => 'モバイル:',
    'LBL_MODULE_NAME' => 'リード',
    'LBL_MODULE_NAME_SINGULAR' => 'リード',
    'LBL_MODULE_TITLE' => 'リード: ホーム',
    'LBL_NAME' => '名前:',
    'LBL_NEW_FORM_TITLE' => 'リード作成',
    'LBL_NEW_PORTAL_PASSWORD' => '新しいポータルパスワード:',
    'LBL_OFFICE_PHONE' => '会社電話:',
    'LBL_OPP_NAME' => '商談名:',
    'LBL_OPPORTUNITY_AMOUNT' => '商談規模:',
    'LBL_OPPORTUNITY_ID'=>'商談ID',
    'LBL_OPPORTUNITY_NAME' => '商談名:',
    'LBL_CONVERTED_OPPORTUNITY_NAME' => '変換済み商談名',
    'LBL_OTHER_EMAIL_ADDRESS' => 'その他のEメール:',
    'LBL_OTHER_PHONE' => 'その他の電話:',
    'LBL_PHONE' => '電話:',
    'LBL_PORTAL_ACTIVE' => 'ポータルアクティブ:',
    'LBL_PORTAL_APP'=> 'ポータルアプリケーション',
    'LBL_PORTAL_INFORMATION' => 'ポータル情報',
    'LBL_PORTAL_NAME' => 'ポータルユーザ名:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'ポータルパスワード設定:',
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_STREET' => '番地',
    'LBL_PRIMARY_ADDRESS_CITY' => '主となる市区町村:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主となる国:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主となる郵便番号:',
    'LBL_PRIMARY_ADDRESS_STATE' => '主となる都道府県:',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'主となる住所 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'主となる住所 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '主となる番地その他:',
    'LBL_PRIMARY_ADDRESS' => '主となる住所:',
    'LBL_RECORD_SAVED_SUCCESS' => '{{moduleSingularLower}}<a href="#{{buildRoute model=this}}">{{full_name}}</a> の作成に成功しました 。',
    'LBL_REFERED_BY' => '紹介元:',
    'LBL_REPORTS_TO_ID'=>'報告先ID',
    'LBL_REPORTS_TO' => '報告先:',
    'LBL_REPORTS_FROM' => '以下からのレポート:',
    'LBL_SALUTATION' => '敬称',
    'LBL_MODIFIED'=>'更新者',
	'LBL_MODIFIED_ID'=>'更新者ID',
	'LBL_CREATED'=>'作成者',
	'LBL_CREATED_ID'=>'作成者ID',
    'LBL_SEARCH_FORM_TITLE' => 'リード検索',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'チェック済みリード選択',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'チェック済みリードの選択',
    'LBL_STATE' => '都道府県:',
    'LBL_STATUS_DESCRIPTION' => 'ステータス詳細:',
    'LBL_STATUS' => 'ステータス:',
    'LBL_TITLE' => '職位:',
    'LBL_UNCONVERTED'=> '未コンバート',
    'LNK_IMPORT_VCARD' => 'vCardから作成',
    'LNK_LEAD_LIST' => 'リード一覧',
    'LNK_NEW_ACCOUNT' => '取引先作成',
    'LNK_NEW_APPOINTMENT' => 'アポイント作成',
    'LNK_NEW_CONTACT' => '取引先担当者作成',
    'LNK_NEW_LEAD' => 'リード作成',
    'LNK_NEW_NOTE' => 'メモ作成',
    'LNK_NEW_TASK' => 'タスク作成',
    'LNK_NEW_CASE' => 'ケース作成',
    'LNK_NEW_CALL' => '電話作成',
    'LNK_NEW_MEETING' => '会議作成',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
	'LNK_SELECT_ACCOUNTS' => '<b>または</b>取引先選択',
    'LNK_SELECT_CONTACTS' => 'もしくは取引先を選択',
    'NTC_COPY_ALTERNATE_ADDRESS' => '別の住所を主となる住所にコピー',
    'NTC_COPY_PRIMARY_ADDRESS' => '主となる住所を別の住所にコピー',
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除してよいですか？',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => '商談を作成するためには取引先が必要です。\n新しい取引先を作成するか、既存の取引先を選択してください。',
    'NTC_REMOVE_CONFIRMATION' => '本当にこのリードをこのケースからはずしてよいですか？',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '本当にこのレコードを直属の部下としてはずしてよいですか？',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'キャンペーン',
    'LBL_TARGET_OF_CAMPAIGNS'=>'成功したキャンペーン:',
    'LBL_TARGET_BUTTON_LABEL'=>'ターゲット',
    'LBL_TARGET_BUTTON_TITLE'=>'ターゲット',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'キャンペーン:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先',
    'LBL_PROSPECT_LIST' => 'ターゲットリスト',
    'LBL_PROSPECT' => 'ターゲット',
    'LBL_CAMPAIGN_LEAD' => 'キャンペーン',
	'LNK_LEAD_REPORTS' => 'リードレポート',
    'LBL_BIRTHDATE' => '誕生日:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'購読頂きありがとうございます。',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'申し訳ありません。サーバに接続できません。後ほど再度お申し込みください。',
    'LBL_ASSISTANT_PHONE' => 'アシスタント電話',
    'LBL_ASSISTANT' => 'アシスタント',
    'LBL_REGISTRATION' => '登録',
    'LBL_MESSAGE' => '以下の情報を入力してください。承認待ちのアカウントが作成されます。',
    'LBL_SAVED' => 'ご登録ありがとうございます。担当者からアカウント情報をお知らせいたしますのでしばらくお待ちください。',
    'LBL_CLICK_TO_RETURN' => 'ポータルに戻る',
    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
    'LBL_CAMPAIGNS' => 'キャンペーン',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'キャンペーン',
    'LBL_CONVERT_MODULE_NAME' => 'モジュール',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'モジュール',
    'LBL_CONVERT_REQUIRED' => '必須',
    'LBL_CONVERT_SELECT' => '選択を許可',
    'LBL_CONVERT_COPY' => 'データをコピー',
    'LBL_CONVERT_EDIT' => '編集',
    'LBL_CONVERT_DELETE' => '削除',
    'LBL_CONVERT_ADD_MODULE' => 'モジュール追加',
    'LBL_CONVERT_EDIT_LAYOUT' => 'コンバートレイアウト編集',
    'LBL_CREATE' => '作成',
    'LBL_SELECT' => '<b>または</b>選択',
	'LBL_WEBSITE' => 'Webサイト',
	'LNK_IMPORT_LEADS' => 'リードのインポート',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => '注意: 現在の「リードのコンバート」画面にはカスタムフィールドが含まれています。初めてスタジオで当該画面をカスタマイズする時は、必要に応じてカスタムフィールドを配置する必要があります。カスタムフィールドは自動的に配置されません。',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> '新たなレコードを追加するモジュール',
	'LBL_REQUIRED_TIP' 	=> 'リードをコンバートする前に、必要なモジュールが作成されている必要があります。',
	'LBL_COPY_TIP'		=> 'チェックすると、リードのフィールドの内容は同じ名前を持つフィールドにコピーされます。',
	'LBL_SELECTION_TIP' => 'リードのコンバート処理中は、取引先担当者への関連フィールドが選択可能となります。',
	'LBL_EDIT_TIP'		=> 'コンバート用のレイアウトを変更',
	'LBL_DELETE_TIP'	=> 'コンバート用レイアウトからこのモジュールを削除',

    'LBL_ACTIVITIES_MOVE'   => 'アクティビティを移動',
    'LBL_ACTIVITIES_COPY'   => 'アクティビティをコピー',
    'LBL_ACTIVITIES_MOVE_HELP'   => "リードのアクティビティに移動するレコードを選択してください。タスク、電話、会議、メモ、Eメールを選択したレコードに移動します。",
    'LBL_ACTIVITIES_COPY_HELP'   => "リードのアクティビティにコピーするレコードを選択してください。タスク、電話、会議、メモが選択したレコードに新規で作成されます。Eメールは選択したレコードに関連付けられます。",
    //For export labels
    'LBL_PHONE_HOME' => '電話 (自宅):',
    'LBL_PHONE_MOBILE' => 'モバイル',
    'LBL_PHONE_WORK' => '会社電話',
    'LBL_PHONE_OTHER' => 'その他の電話',
    'LBL_PHONE_FAX' => 'ファックス',
    'LBL_CAMPAIGN_ID' => 'キャンペーンID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'アサイン先',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'アサイン先ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => '更新者ID',
    'LBL_EXPORT_CREATED_BY' => '作成者ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'モバイル',
    'LBL_EXPORT_EMAIL2'=>'その他のEメール',
	'LBL_EDITLAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => '作成日' /*for 508 compliance fix*/,
	'LBL_LOADING' => '読み込み中' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => '編集' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B プリンシパルID',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商談',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'メモ',

    'LBL_HELP_CONVERT_TITLE' => '{{module_name}}をコンバート',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}}モジュールは、組織が提供する製品やサービスに興味がある可能性がある、個々の見込み客で構成されています。 {{module_name}}}は営業{{opportunities_singular_module}}として認定されると、{{plural_module_name}}{{opportunities_module}}、{{contacts_module}}、{{accounts_module}}に変換することができます。  {{module_name}}レコードが作成されたら、閲覧することができ、{{plural_module_name}}をインポートするような{{plural_module_name}}モジュール、コピーなどを通して、Sugarに{{plural_module_name}}を作成することができ、様々な方法で{{plural_module_name}}レコードの表示を経由して {{module_name}}に関連する情報を編集します。',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}}モジュールは、組織が提供する製品やサービスに興味がある可能性がある、個々の見込み客で構成されています。 - 個々のフィールドまたは[編集]ボタンをクリックして、このレコードのフィールドを編集します。 - 表示または左下のペインに「データビュー」をトグルしてサブパネル内の他のレコードへのリンクを変更します。 - 左下ペインに「アクティビティストリーム」を切り替えることにより、{{activitystream_singular_module}}内のレコードの変更したり表示することができます。 - レコード名の右にあるアイコンを使用して、このレコードをフォローするか、お気に入りにしてください。 - 追加のアクションは、[編集]ボタンの右にあるドロップダウンの操作]メニューにあります。',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}} モジュールは、組織が提供する製品やサービスに興味がある可能性がある、個人の見込み客で構成されています。{{module_name}} は販売{{opportunities_singular_module}} として認定されると、{{contacts_singular_module}}、{{accounts_singular_module}}、{{opportunities_singular_module}} または他のレコードに変換ができます。

{{module_name}} を作成するには：
1. 必要に応じてフィールドの値を指定します。
- 「必須」フィールドは保存前に入力完了してください。
- 必要に応じて、追加のフィールドを展開する「更に表示」をクリックします。
2. 新しいレコードを確定し、前のページに戻るには「保存」をクリックします。',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugarは {{module_name}}があなたの資格基準を満たした後には、{{plural_module_name}}を{{contacts_module}}、{{accounts_module}}、および他のモジュールに変換することが可能になります。

各 [関連付け] ボタンをクリックして、新しいレコードの値を確認するフィールドを変更することで、各モジュールをステップ実行します。

Sugarがあなたの{{module_name}}の情報と一致する既存のレコードを検出した場合は、複製を選択し、[関連付け] ボタンで選択を確定するか、「無視して新規作成」をクリックして正常に進行するかのオプションが提供されます。

必要なモジュールを確認した後、上部にある [保存して変換] ボタンをクリックし、変換を確定します。',

    //Marketo
    'LBL_MKTO_SYNC' => 'Marketo®に同期する',
    'LBL_MKTO_ID' => 'Marketoリード ID',
    'LBL_MKTO_LEAD_SCORE' => 'リードソース',

    'LBL_FILTER_LEADS_REPORTS' => 'リードのレポート',
    'LBL_DATAPRIVACY_BUSINESS_PURPOSE' => '以下のことに同意したビジネス目的:',
    'LBL_DATAPRIVACY_CONSENT_LAST_UPDATED' => '最後に更新された同意',

    // Leads Pipeline view
    'LBL_PIPELINE_ERR_CONVERTED' => '{{moduleSingular}} ステータスを変更できません。この {{moduleSingular}} はすでにコンバート済みです。',
);
