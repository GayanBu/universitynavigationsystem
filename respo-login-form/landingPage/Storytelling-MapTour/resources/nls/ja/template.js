﻿define(
	 ({
		viewer: {
			loading: {
				step1: "アプリケーションを読み込んでいます",
				step2: "データを読み込んでいます",
				step3: "ツアーを初期化しています",
				loadBuilder: "ビルダ モードへの切り替え",
				redirectSignIn: "サイン イン ページへのリダイレクト",
				redirectSignIn2: "(サイン イン後にここにリダイレクトされます)",
				fail: "マップ ツアーの読み込みに失敗しました",
				failButton: "再試行"
			},
			errors: {
				boxTitle: "エラーが発生しました",
				portalSelf: "致命的なエラー: ポータルの構成情報を取得できませんでした",
				invalidConfig: "致命的なエラー: 無効な構成",
				invalidConfigOwner: "致命的なエラー: 無効な構成 (権限のある所有者が必要です)",
				invalidConfigNoWebmap: "致命的なエラー: 無効な構成 (index.html で Web マップまたはアプリケーション ID が指定されていません)",
				createMap: "マップを作成できません",
				invalidApp: "致命的なエラー: アプリケーションを読み込めません",
				noLayer: "Web マップにマップ ツアーの有効なデータ レイヤが含まれていません。",
				noLayerMobile: "マップ ツアー Web アプリケーションへようこそ。このアプリケーションは構成されていません。マップ ツアー ビルダは、モバイル デバイスではサポートされていません。",
				noLayerView: "マップ ツアー Web アプリケーションへようこそ。<br />このアプリケーションは、まだ構成されていません。",
				appSave: "Web アプリケーションの保存中にエラーが発生しました",
				mapSave: "Web マップの保存中にエラーが発生しました",
				featureServiceLoad: "フィーチャ サービスの読み込み中にエラーが発生しました",
				notAuthorized: "このアプリケーションにアクセスする権限がありません",
				oldBrowserTitle: "完全にサポートされていないブラウザです",
				noBuilderIE8: "マップ ツアー ビルダは、バージョン 9 より前の Internet Explorer ではサポートされていません。",
				ie10Win7Explain: "データ ソースがアタッチメントを含むフィーチャ サービスである場合、マップ ツアー対話型ビルダは、Windows 7 の Internet Explorer 10 ではサポートされていません。アタッチメントを含むフィーチャ サービスを使用するには、<a target='_blank' href='http://msdn.microsoft.com/en-us/library/ie/hh920756(v=vs.85).aspx'>ドキュメント モードを手動で強制的に Internet Explorer 9 標準にするか</a>、<a target='_blank' href='http://news.softpedia.com/news/How-to-Remove-IE10-and-Get-Back-to-IE9-on-Windows-7-308998.shtml'>Internet Explore 9 にダウングレードするか</a>、Windows 8 にアップグレードする必要があります。",
				oldBrowserExplain: "このブラウザは、マップ ツアーにアップロードした画像からサムネイルを自動生成する機能をサポートしていません。このブラウザを使用してマップ ツアーを作成できますが、アップロードした画像に対してサムネイル画像を個別に指定する必要があります。",
				oldBrowserExplain2: "操作性を改善するには、<a href='http://browsehappy.com/' target='_blank'>ブラウザをアップグレードするか</a>、<a href='http://www.google.com/chromeframe/?redirect=true' target='_blank'>Internet Explorer 向けの Google Chrome Frame を有効化してください</a>。",
				oldBrowserExplain3: "マップ ツアー ビルダは、Windows XP の Internet Explorer 10 では動作しません。",
				oldBrowserClose: "閉じる"
			},
			mobileHTML: {
				showIntro: "タイトルの表示",
				hideIntro: "タイトルの非表示",
				navList: "リスト",
				navMap: "マップ",
				navInfo: "メディア",
				introStartBtn: "開始"
			},
			desktopHTML: {
				storymapsText: "ストーリー マップ",
				builderButton: "ビルダ モードに切り替え",
				bitlyTooltip: "アプリケーションへのショート リンクを取得",
				bitlyStartIndex: "現在の場所へのリンク"
			},
			builderHTML: {
				panelHeader: "アプリケーション構成",
				buttonSave: "保存",
				buttonSettings: "設定",
				buttonShare: "共有",
				buttonView: "ビュー モード",
				buttonItem: "Web アプリケーション アイテムを開く",
				buttonHelp: "ヘルプ",
				buttonOrganize: "整理",
				buttonAdd: "追加",
				buttonImport: "インポート",
				buttonImportDisabled: "アタッチメントを含むフィーチャ サービスを使用する場合、インポートは使用できません",
				dataEditionDisabled: "CSV データ ソースでデータ エディションが無効化されています",
				dataSourceWarning: "マップ ツアー データ レイヤが変更されました。フィーチャ ID が同じでない場合、<b>[整理]</b> を使用して順序および非表示ポイントをリセットする必要があります。フィールド名が異なる場合は、 <b>[設定] の [データ] タブ</b> でフィールドの設定をリセットする必要があります。",
				organizeWarning: "対話型ビルダの外部で追加された 1 つまたは複数のポイントは非表示になっています。",
				dataPicError0a: "このツアーには、<b>%NB%</b> 非対応の写真 URL が含まれています。",
				dataPicError0b: "このツアーには、<b>%NB%</b> 非対応の写真 URL が含まれている可能性があります。",
				dataPicError1: "マップ ツアーの場合、写真 URL は .jp(e)g、.png、.gif、または .bmp のいずれかの拡張子で終わる必要があります。",
				dataPicError2: "この要件は、公開された既存のマップ ツアーには適用されません。ただし、対話型ビルダを使用するには、最初に、次の 2 つのアクションのいずれかを実行して、 この URL の問題を解決する必要があります。",
				dataPicError3: "URL の編集",
				dataPicError4: "この操作では、画像に対応していない URL の末尾に <i>#isImage</i> を追加します。ほとんどのサーバでは URL の文字列追加がサポートされていますが、この操作を実行した後は、ポイントを移動することで、更新した写真の URL が正常に機能することを確認する必要があります。それぞれの写真が読み込まれた場合は、マップ ツアーを保存できます。<b>写真のリンクが切れている場合は、マップ ツアーを保存しないでください。</b>代わりに、ビルダを再び読み込んで、2 番目の操作を実行してください。",
				dataPicError5: "ツアーを写真に制限",
				dataPicError6: "このオプションを選択すると、すべての URL が画像と見なされますが、対話型ビルダを利用してビデオを追加できなくなります。このアクションは、今後、ビデオを追加することになった場合に元に戻すことができます。",
				dataPicError7: "マップ ツアーは写真に制限されているため、ビデオは利用できません。この制限を解除することにした場合は、写真が正常に読み込まれることを確認してから、マップ ツアーを保存してください。この制限は、必要に応じて後で再適用できます。",
				dataPicError8: "写真制限の解除",
				dataPicError9: "これらの URL がビデオをポイントしている場合は、この警告を無視できます。URL が画像をポイントしている場合は、次の 2 つのアクションのいずれかを実行する必要があります。",
				modalCancel: "キャンセル",
				modalApply: "適用",
				organizeHeader: "ツアーの整理",
				organizeGeneralCaption: "ツアー ポイントを並べ替えるにはドラッグ アンド ドロップを使用します",
				organizeDelete: "削除",
				organizeHide: "非表示",
				organizeReset: "順序および非表示ポイントをリセット",
				addMaxPointReached: "アイコン セットで許容されているポイントの最大数に達したため、別のツアー ポイントを追加できません。<br /><br />既存のポイントを削除した場合、アプリケーションを再度読み込む必要があります。",
				addMaxPointReachedMobile: "許容されているポイントの最大数に達したため、その写真を追加できません。",
				addClose: "閉じる",
				addHeader: "新しいツアー ポイントの追加",
				addTabPicture: "メディア",
				addTabInformation: "情報",
				addTabLocation: "位置",
				addSelectCaption: "写真の選択または削除",
				addNoteVideo: "ビデオを使用する手順については、ヘルプをご参照ください。",		
				addSelectCaptionNoFileReader: "写真の選択",	
				addChangePhoto: "写真とサムネイルの変更",
				addPictureResolutionIntro: "写真の解像度が高すぎます:",
				addPictureResolutionOldBrowser: "写真の解像度が高すぎます。%RECOMMENDED_RES% より低い解像度を指定して、マップ ツアーの表示を最適化してください。",
				addPictureResolutionResize: "写真の解像度を %RESOLUTION% に変更",
				addPictureResolutionKeep: "元の解像度である %RESOLUTION% を維持",
				addSelectThumbnail: "サムネイルの選択",
				addNoThumbSelected: "サムネイルが選択されていません",
				addThumbSelected: "選択済み",
				addCameraSettingsHeader: "カメラ設定",
				addThumbnailHeader: "サムネイル",
				addLabelPicUrl: "写真",
				addLabelThumbUrl: "サムネイル",
				addTextPlaceholderUrl: "イメージの URL の入力",
				addTextPlaceholderUrl2: "YouTube ページの URL の入力",
				addTextPlaceholderUrl3: "Vimeo ページの URL の入力",
				addTextPlaceholderUrl4: "ビデオ埋め込み URL の入力",
				addLabelVideo: "ビデオ",
				addMediaVideoOther: "その他",
				addMediaVideoHelp: "URL をチェックして、デフォルトのサムネイルを取得",
				addMediaVideoHelpTooltip1: "チェックに成功しました",
				addMediaVideoHelpTooltip2: "チェックに失敗しました",
				addMediaVideoHelpTooltip4: "ビデオを埋め込むオプションを見つけ、表示されているビデオの URL をコードにコピー",
				addLabelName: "名前",
				addLabelDescription: "キャプション",
				addTextPlaceholder: "ここに入力します",
				addLocatePlaceholder: "住所または位置を検索します",
				addPinColor: "色",
				addLatitude: "緯度",
				addLongitude: "経度",
				addLatitudePlaceholder: "例: 34.056",
				addLongitudePlaceholder: "例: -117.195",
				addUploading: "ツアー ポイントをアップロードしています",
				addSave: "ツアー ポイントの追加",
				addMobileUploading: "写真をアップロードしています",
				addMobileName: "名前を入力",
				addMobileNameMandatory: "エラーです。名前を入力してください。",
				addMobileError: "不具合が発生しました",
				settingsHeader: "アプリケーション設定",
				settingsTabLayout: "レイアウト",
				settingsTabColor: "色",
				settingsTabLogo: "ヘッダー",
				settingsTabFields: "データ",
				settingsTabExtent: "範囲",
				settingsTabZoom: "ズーム レベル",
				settingsLayoutExplain: "適切なアプリケーション レイアウトを選択します。",
				settingsLayoutProfessional: "3 パネル レイアウト",
				settingsLayoutModern: "統合レイアウト",
				settingsLayoutSelected: "選択したレイアウト",
				settingsLayoutSelect: "このレイアウトを選択",
				settingsLayoutNote: "ビデオを使用するポイントでは、プラカードは、そのオプションがオフの場合でも常に、ビデオの下に配置されるので、注意してください。",
				settingsLayoutLocBtn: "[検索] ボタンを表示します",
				settingsLayoutLocBtnHelp: "その機能は、ほとんどのモバイル デバイスとデスクトップ ブラウザ (Internet Explorer 9) でサポートされています。",
				settingsColorExplain: "外観を変更するには、定義済みのテーマを選択するか、独自のテーマを作成します。",
				settingsLabelColor: "ヘッダー、コンテンツおよびフッターの色",
				settingsLogoExplain: "ヘッダー ロゴをカスタマイズします (最大 250 x 50 ピクセル)。",
				settingsLogoEsri: "Esri ロゴ",
				settingsLogoNone: "ロゴなし",
				settingsLogoCustom: "カスタム ロゴ",
				settingsLogoCustomPlaceholder: "画像の URL",
				settingsLogoCustomTargetPlaceholder: "クリックスルー リンク",
				settingsLogoSocialExplain: "ヘッダー右上にあるリンクのカスタマイズ",
				settingsLogoSocialText: "テキスト",
				settingsLogoSocialLink: "リンク",
				settingsLogoSocialDisabled: "この機能は、管理者によって無効にされています",
				settingsDataFieldsExplain: "写真の名前、キャプションおよび色の各フィールドを選択します。",
				settingsDataFieldsError: "アプリケーションが適切な名前、キャプション、または色データを判断できません。ここで使用されるフィールドを選択してください。これらの設定は後で変更できます。",
				settingsFieldsLabelName: "名前",
				settingsFieldsLabelDescription: "キャプション",
				settingsFieldsLabelColor: "色",
				settingsFieldsReset: "フィールド選択のリセット",
				settingsExtentExplain: "次の対話型マップを使用して、マップ ツアーの初期範囲を設定します。",
				settingsExtentExplainBottom: "定義する範囲により、Web マップの初期範囲が変更されます。この範囲は、最初のツアー ポイントを含まない場合は使用されませんので、注意してください。その場合、ツアーは最初のポイントで中央にくるように開きます。",
				settingsExtentDateLineError: "この範囲は、経度 180°の子午線を超えることはできません。",
				settingsExtentDateLineError2: "範囲を計算中にエラーが発生しました",
				settingsExtentDrawBtn: "新しい範囲の描画",
				settingsExtentModifyBtn: "範囲の編集",
				settingsExtentApplyBtn: "マップ ツアーでのプレビュー",
				settingsExtentUseMainMap: "マップ ツアー範囲の使用",
				settingsZoomExplain: "概要に続くストーリー ポイントのズームを設定します (オプション)。",
				settingsLabelZoom: "縮尺/レベル",
				settingsZoomFirstValue: "なし",
				settingsFieldError: "各リスト内のフィールドを選択してください",
				dataTitle: "ArcGIS Online ホスト",
				dataExplain: "フィーチャ サービスは Web マップに追加されます。これは、他のユーザとは共有されず、あなただけに追加/編集/削除の権限があります。<br /><br />アイテム ページを使用してアプリケーションを共有する場合、フィーチャ サービスも共有するかどうかをシステムから尋ねられますので注意してください。これは必要な手順です。共有しても編集権限を持つのはあなただけです。",
				dataNameLbl: "サービス名",
				dataFolderListLbl: "フォルダ",
				dataFolderListFetching: "フォルダを取得しています...",
				dataRootFolder: "ルート",
				dataNameError: "フィーチャ サービスの名前を入力してください",
				dataFolderError: "有効なフォルダの選択",
				dataSrcContainsInvalidChar: "フィーチャ サービス名に無効な文字 (-、＜、>、#、%、:、\"、?、&、+、/、\) が 1 つ以上含まれています。",
				dataSrvAlreadyExistsError: "その名前のサービスは組織サイト内にすでに存在します。別の名前を選択してください。",
				dataBtnSave: "サービスの作成",
				dataFooterProgress: "作成が進行中です",
				dataFooterSucceed: "作成に成功しました。読み込んでいます。",
				dataFooterError: "作成に失敗しました。もう一度やり直してください。",
				tabError: "すべてのタブでエラーを確認してください",
				introRecordBtn: "概要",
				introRecordActivate: "最初のポイントを概要として使用します (カルーセルには表示されません)"
			},
			addPopupJS: {
				uploadingPicture: "写真をアップロードしています",
				uploadSuccess: "アップロードに成功しました",
				uploadError: "写真のアップロード中にエラーが発生しました",
				uploadError2: "フィーチャの追加中にエラーが発生しました (無効な html タグ)",
				notJpg: "アップロードする JPEG の写真を選択してください",
				errorNoPhoto: "アップロードする画像を選択",
				errorNoThumbnail: "アップロードするサムネイルを選択",
				errorInvalidPicUrl: "このツアー ポイントの有効な写真 URL (http(s):// で始まり、jpg、png、gif、または bmp で終わる) を入力してください。URL の末尾を｢#isImage｣にすると、このルールを無視できます。",
				errorInvalidThumbUrl: "このツアー ポイントの有効なサムネイル URL (http(s):// で始まり、jpg、png、gif、または bmp で終わる) を入力してください。",
				errorInvalidVideoUrl: "有効なビデオの URL の入力 (http(s):// で始まる)",
				errorNoName: "このツアー ポイントの名前を入力してください",
				errorNoDescription: "このツアー ポイントのキャプションを入力してください",
				errorNoLocation: "このツアー ポイントの位置を設定"
			},
			builderJS: {
				noPendingChange: "保留中の変更はありません",
				unSavedChangeSingular: "1 つの保存されていない変更",
				unSavedChangePlural: "複数の保存されていない変更",
				shareStatus1: "ツアーが保存されていません",
				shareStatus2: "ツアーがパブリックに共有されています",
				shareStatus3: "ツアーが組織サイト内で共有されています",
				shareStatus4: "ツアーが共有されていません",
				popoverDiscard: "保存されていない変更を破棄しますか？",
				yes: "はい",
				no: "いいえ",
				popoverLoseSave: "ビューアを開くと、保存されていない変更は失われます",
				ok: "OK",
				popoverSaveWhenDone: "完了したら必ず保存してください",
				closeWithPendingChange: "アクションを確認しますか？変更内容は失われます。",
				gotIt: "OK",
				savingApplication: "アプリケーションを保存しています",
				saveSuccess: "アプリケーションは正常に保存されました",
				saveError: "保存に失敗しました。もう一度やり直してください。",
				saveError2: "名前または説明に無効な html タグがあるため保存に失敗しました",
				saveError3: "タイトルは必ず入力してください",
				dragColorPicker: "移動するか<br />色を変更します",
				dataWarningExtent: "Web マップの表示範囲外にデータがあります。これらのデータはツアー ポイントとして使用されません。使用するには、マップ表示範囲を変更します。",
				dataWarningVisibi: "現在の Web マップの範囲では、マップ ツアー レイヤは表示されません。%MAPSIZE% のマップでマップ ツアー レイヤが表示されることを確認してください。",
				dataWarningEdit: "Web マップの編集",
				dataWarningClose: "閉じる",
				signIn: "アカウントでサイン インして",
				signInTwo: "アプリケーションを保存してください。",
				switchBM: "ベースマップの変更"
			},
			organizePopupJS: {
				messageStart: "次のレコードを削除しようとしています。",
				messageSinglePoint: "1 つのツアー ポイント",
				messageMultiPoint: "複数のツアー ポイント",
				messagePermantRemove: "これにより、データベースから",
				messageRecord: "レコードが",
				messageRecordPlural: "レコードが",
				messageConfirm: "永久に削除されます。続行しますか？",
				labelButtonShow: "表示",
				labelButtonHide: "非表示"
			},
			picturePanelJS: {
				popoverDeleteWarningPicAndThumb: "これにより、写真およびサムネイルが完全に削除されます。",
				popoverDeleteWarningThumb: "これにより、サムネイルが完全に削除されます。",
				popoverUploadingPhoto: "写真とサムネイルをアップロードしています",
				popoverUploadingThumbnail: "サムネイルをアップロードしています",
				popoverUploadSuccessful: "アップロードに成功しました",
				popoverUploadError: "アップロードに失敗しました。もう一度やり直してください。",
				changePicAndThumb: "写真の変更",
				changeThumb: "サムネイルの変更",
				selectPic: "メディアの変更",
				selectThumb: "サムネイルの変更",
				uploadPicAndThumb: "適用"
			},
			headerJS:{
				editMe: "編集",
				templateTitle: "テンプレートのタイトルの設定",
				templateSubtitle: "テンプレートのサブタイトルの設定"
			},
			crossFaderJS:{
				setPicture: "写真のタイトルの設定",
				setCaption: "写真のキャプションの設定"
			},
			importPopup: {
				title: "インポート",
				prevBtn: "戻る",
				nextBtn: "次へ"
			},
			importPopupHome: {
				header: "写真の保存場所"
			},
			onlinePhotoSharingCommon: {
				pictures: "写真",
				videos: "ビデオ",
				disabled: "この機能は、管理者によって無効にされています",
				disabledPortal: "この機能は Portal for ArcGIS では無効になっています。",
				header1: "写真はパブリックに共有する必要があります。",
				header2: "インポートは最初の %NB1% %MEDIA% に制限されます。",
				emptyDataset: "写真が見つかりませんでした",
				footerImport: "インポート",
				selectAlbum: "パブリック アルバムの選択",
				selectAlbum2: "アルバムの選択",
				pleaseChoose: "選択してください",
				userLookup: "検索",
				userLookingup: "検索",
				csv: "CSV で参照",
				advanced: "高度な設定",
				advancedScratchLbl: "新しいツアーの開始",
				advancedScratchTip: "ウィザードを使用して手動で入力できる空のツアーを作成します。",
				advancedCSVLbl: "CSV ファイルからツアー データをインポート",
				advancedCSVTip: "CSV ファイルからツアーのコンテンツをインポートします。",
				advancedCommonTip: "画像とビデオがオンライン上にすでに存在する必要があります。",
				select: "選択",
				locUse: "写真のジオロケーションを使用",
				locExplain: "写真の場所は、アルバムから継承でき、すべての写真が同じ場所に置かれることになるため、使用しないことをお勧めします。",
				locExplain2: "ビデオの場所は、ユーザ設定から継承でき、すべてのビデオが同じ場所に置かれることになるため、使用しないことをお勧めします。"
			},
			viewFlickr: {
				title: "Flickr のインポート",
				header: "Flickr のユーザ名を入力し、インポートする写真のセットまたはタグを選択します。",
				userInputLbl: "ユーザ名の入力",
				signInMsg2: "ユーザが見つかりません",
				selectSet: "写真セットの選択",
				selectTag: "またはタグを選択",
				footerImportTag: "選択したタグのインポート",
				footerImportSet: "選択したセットのインポート"
			},
			viewFacebook: {
				title: "Facebook のインポート",
				header: "Facebook ユーザ アカウントで認証するか、公開ページを使用します。プライベート アルバムを使用して、Facebook のユーザ認証を必要としない公開マップ ツアーを作成できます。この公開マップ ツアーでは、コメントと「いいね！」をプライベートのままにしておくことができます。",
				leftHeader: "Facebook ユーザ",
				rightHeader: "Facebook ページ",
				pageExplain: "Facebook ページは、<b>esrigis</b> などの、公開されたブランド/製品または著名人です。ページ URL 内の最初の「/」以降から、ページ名を取得できます。",
				pageInputLbl: "ページ名の入力",
				lookupMsgError: "ページが見つかりません"
			},
			viewPicasa: {
				title: "Picasa/Google+ のインポート",
				header: "電子メール、あるいは Picasa または Google+ アカウントの ID を入力してください。",
				userInputLbl: "電子メールまたは ID の入力",
				signInMsg2: "アカウントが見つかりません",
				signInMsg3: "パブリック アルバムがありません",
				howToFind: "Picasa または Google+ アカウントの ID の検索方法",
				howToFind2: "任意の Picasa または Google+ のページの 1 番目と 2 番目の「/」の間の数字をコピーします。"
			},
			viewCSV: {
				title: "CSV のインポート",
				uploadBtn: "CSV ファイルの選択またはドロップ",
				resultHeaderEmpty: "CSV が空です",
				resultHeaderSuccess: "%NB_POINTS% ポイントが正常に読み込まれました",
				resultHasBeenLimited: "1 つのツアーにつき %VAL3% ポイントの制限を遵守するために、インポートは、%VAL2% のうちの最初の %VAL1% ポイントに制限されます",
				browserSupport: "使用中のブラウザはサポートされていません。CSV を使用するには、<a href='http://browsehappy.com/' target='_blank'>ブラウザをアップグレードする</a>か、ArcGIS.com Web マップ ビューアを使用する必要があります (ヘルプを参照)。",
				errorLatLng: "緯度フィールドと経度フィールドが見つかりませんでした。可能な緯度の値は <i>%LAT%</i>、経度の値は <i>%LONG%</i> です。",
				errorFieldsExplain: "以下の必須フィールドが見つからないため、読み込みに失敗しました。",
				errorFieldsName: "<b>名前</b>: 可能な値は %VAL%",
				errorFieldsDesc: "<b>説明</b>: 可能な値は %VAL%",
				errorFieldsUrl: "<b>写真 URL</b>: 可能な値は %VAL%",
				errorFieldsThumb: "<b>サムネイル URL</b>: 可能な値は %VAL%",
				errorFields2Explain: "以下の属性について、レイヤとは異なる属性が CSV で使用されているため、読み込みに失敗しました。",
				errorFields2Name: "<b>名前</b>: %VAL2% ではなく %VAL1% を使用",
				errorFields2Desc: "<b>説明</b>: %VAL2% ではなく %VAL1% を使用",
				errorFields2Url: "<b>写真 URL</b>: %VAL2% ではなく %VAL1% を使用",
				errorFields2Thumb: "<b>サムネイル URL</b>: %VAL2% ではなく %VAL1% を使用",
				resultFieldsAll: "すべての属性がインポートされました",
				resultFieldsNotAll: "以下の属性は、マップ レイヤに存在しないため、インポートされませんでした",
				resultFieldsNotAll2: "以下の属性がインポートされました",
				footerNextBtnResult: "Web マップにインポート",
				footerProgress: "インポートが進行中です",
				footerSucceed: "インポートに成功しました。読み込んでいます"
			},
			viewYoutube: {
				title: "YouTube のインポート",
				header: "YouTube のユーザ名を入力してパブリックに共有されているビデオを検索します。",
				pageInputLbl: "YouTube のユーザ名の入力",
				lookupMsgError: "ユーザが見つかりません",
				howToFind: "YouTube のユーザ名の検索方法",
				howToFind2: "ビデオの下にユーザ名が表示されます",
				found: "見つかりました",
				noData: "パブリックなビデオが見つかりませんでした"
			},
			viewGeoTag: {
				title: "画像/ビデオの選択と検索",
				header: "インポートする写真をクリックまたはタップして特定します。",
				headerMore: "画像/ビデオがジオロケートできない理由",
				headerExplain: "写真の場所が有効であれば、それらの写真は自動的にマップ上で検索されて、2 番目のタブに表示されます。<br /><br />デフォルトでは、Picasa と Flickr は、写真の EXIF 位置メタデータを使用しません。[プライバシー] タブの Flickr または Picasa の設定で、写真の場所の使用が有効化されていることを確認してください。Flickr または Picasa に、写真を完全に再インポートすることが必要になる場合があります。<br /><br />Facebook の場合、各写真に移動し、[編集] をクリックして、写真の EXIF メタデータに基づいて提案された選択肢から場所を選択する必要があります。",
				leftPanelTab1: "検索する",
				leftPanelTab2: "検索済み",
				clickOrTap: "マップをクリックまたはタップして検索する",
				clearLoc: "場所の消去",
				clickDrop: "インポートしない",
				footerImport: "インポート",
				footerProgress: "インポートが進行中です",
				footerSucceed: "インポートに成功しました。読み込んでいます...",
				loading: "読み込んでいます",
				error: "写真のジオロケーションのインポートに失敗しました。ジオロケーションが無視されました。"
			},
			initPopup: {
				title: "マップ ツアー ビルダへようこそ",
				prevBtn: "戻る",
				nextBtn: "次へ"
			},
			initPopupHome: {
				header1: "写真またはビデオの場所",
				header2: "このアシスタントを使用して、オンラインに保存されたメディアからマップ ツアーを構築したり、それらを ArcGIS Online 組織向けプランのアカウントにインポートしたりできます。",
				title1: "メディアはすでにオンラインにあります",
				title2: "画像をアップロードする必要があります",
				hostedFSTooltip: "ArcGIS Online を使用して、画像をホストします (ビデオはサポートされていません)。",
				hostedFsNA: "ArcGIS Online 組織向けプランの公開者ユーザまたは管理者ユーザのみが使用できます",
				footer1: "完了したら、必ずアプリケーション アイテム ページを使用してマップ ツアーを利用者と共有してください。",
				footer3: "CSV テンプレートのダウンロード",
				footer4: "ダウンロードしない場合、\"名前を付けて保存\"",
				footer4bis: "ダウンロードが開始しない場合は、右クリックして、[名前を付けて保存] を実行します。",
				footer5: "詳細",
				footerProgress: "作成が進行中です",
				footerSucceed: "正常に作成されました。読み込んでいます..."
			},
			helpPopup: {
				title: "ヘルプ",
				close: "閉じる",
				tab1: {
					title: "概要",
					div1: "マップ ツアー テンプレートは、説得力のある写真またはメディア エレメントが存在する地理情報を、伝えたいストーリーで表示するために設計されています。",
					div2: "このテンプレートを使用して、魅力的な使いやすい Web アプリケーションを作成できます。そのWeb アプリケーションでは、番号の順序でマップ上に小規模な一連の場所が表示され、その順序で参照できます。このテンプレートは、スマートフォンやタブレットなど、任意のデバイス上の任意の Web ブラウザで使用するように設計されています。<br /><br />作成できるアプリケーションの例を次に示します。",
					div4: "<a href='http://storymaps.esri.com/stories/maptour-palmsprings' target='_blank'>パームスプリングス マップ ツアー</a>。",
					div42: "他のユーザが作成しているマップ ツアーの例を表示するには、<a href='http://storymaps.arcgis.com/' target='_blank'>ストーリー マップ Web サイト</a>の<a href='http://links.esri.com/storymaps/map_tour_gallery' target='_blank'>ギャラリーに移動します</a>。また、<a href='https://twitter.com/EsriStoryMaps' target='_blank'>@EsriStoryMaps</a> で Esri の Twitter をフォローすることもできます。",
					div5: "みなさまのご参加をお待ちしています。質問がある場合、新しい機能を依頼する場合、あるいはバグを見つけた場合は、<a href='http://links.esri.com/storymaps/forum' target='_blank'>ストーリー マップ ユーザ フォーラム</a>をご覧ください。"
				},
				tab2: {
					title: "データ",
					div1: "マップ ツアーを作成する際に考慮する主な点は、写真の保存場所の選択です。マップ ツアーには、主要な写真共有サービスや任意の Web サーバに保存された写真、またはフィーチャ サービスのアタッチメントとして保存された写真を使用できます。",
					div1a: "サポートされている写真の形式とビデオの詳細については、このタブの最後のセクションをご参照ください。",
					div2: "対話型ビルダでは、マップ ツアーで画像を処理するための次の 2 つのオプションが提供されます。",
					div3: "<ul><li>Flickr のような写真共有サイトに保存された画像や、独自の Web サイトに保存された画像などの、<b>すでにオンラインに存在する写真</b>を使用できます。それらの画像は、URL を使用してマップ ツアーで参照されます。</li><li><b>写真をコンピュータから直接マップ ツアーにアップロードする</b>こともできます。このアップロードのオプションを使用するには、ArcGIS for Organizations アカウントを所有し、公開者権限または管理者権限を持っている必要があります。これは、ホスト フィーチャ サービスが自動的に作成され、写真がアタッチメントとしてそのフィーチャ サービスに保存されるためです。</li></ul>",
					div4: "主なユース ケースは次のとおりです。",
					div4b: "<b>写真がまだホストされず</b>、ArcGIS for Organizations アカウントを保有している: 最良の選択は、ホスト フィーチャ サービスを使用することです。公開写真共有サービスのように、写真が最適化され、高速な読み込み画像が作成されます。ArcGIS プラットフォームのすべての管理機能およびデータ管理機能にアクセスできます。",
					div5: "<b>組織サイトのメンバーではない</b>: まず、写真共有 Web サイトまたは独自の Web サーバに写真をアップロードする必要があります。ビルダを介してそれらの写真を使用します。それらの写真は、元の場所で引き続きホストされます。",
					div6: "写真をアタッチメントとして保存しているか、外部の写真を参照している<b>既存のフィーチャ サービスを再利用しようとしている</b>: 詳細は、下のセクションを参照してください。",
					div7: "マップ ツアー テンプレートの<b>以前のバージョンを使用しており</b>、写真とサムネイルを参照する CSV がすでに存在する: その CSV をインポートしてデータを改善できます。ビルダは、緯度/経度フィールドを使用する CSV のみをサポートします。アドレスベース CSV は、Web マップを使用して引き続き使用できます (下のセクションを参照)。",
					div8: "オンライン写真共有サービスからインポートする",
					div9: "インポート操作は、Web マップ フィーチャ コレクションに URL を格納することによって、すでにホストされた写真を参照します。写真は ArcGIS Online に保存されません。ホスト中の写真にアクセスできない場合、それらの写真はマップ ツアーで使用できなくなり、「写真を使用できません」という画像が表示されます。写真の名前、説明、および場所がマップ ツアーにインポートされるかどうかは、サービス プロバイダによって異なります。 これらの属性は Web マップに保存され、オンライン サービスに対するどのような編集も、マップ ツアーには反映されません。",
					div10: "Web サーバへの写真の保存",
					div11: "写真を自分でホストすることを選択した場合、写真のサムネイルを手動で作成することが必要になります。最大解像度の写真をサムネイルに使用すると、パフォーマンスが低下します。そのため、自動的にそれを実行するオンライン写真共有サービスやフィーチャ サービスを使用することを強く推奨します。",
					div12: "既存のフィーチャ サービスまたはシェープファイルの使用",
					div13: "任意のポイント フィーチャ サービスまたはシェープファイルを、マップ ツアーのデータ ソースとして使用できます。arcgis.com マップ ビューアを使用して、それをレイヤとして Web マップに追加するだけです。アプリケーションが必要な属性をレイヤで検出すると、ビルダのすべての機能が使用可能になります。",
					div14: "フィールド名に使用できる値は次のとおりです (大文字と小文字は区別されません)。",
					div151: "名前",
					div152: "説明",
					div153: "写真",
					div154: "サムネイル",
					div155: "色 ",
					div16: "フィーチャ サービスを使用しているときに、一致するフィールドをアプリケーションが検出できない場合、ビルダで使用されるフィールドを構成するまで、ビューアは動作しません。Web マップに追加される CSV とシェープファイル レイヤには、必須フィールドがすべて存在している必要があります。必須フィールドが存在しない場合、ビルダは動作しません。",
					div162: "写真がアタッチメントとして格納されているフィーチャ サービスを使用している場合は、<b>2 つのアタッチメントを含むフィーチャのみが使用されます</b>。最初のアタッチメントはメインのピクチャを定義し、2 番目のアタッチメントはサムネイルを定義します。",
					div17: "アタッチメントを含まないフィーチャ サービスの場合、[写真] フィールドと [サムネイル] フィールドは必須です。アタッチメントを含むフィーチャ サービスの場合、これらのフィールドはオプションですが、強く推奨されます。サービスでアタッチメントを有効にしている場合、ビルダを使用して写真をアタッチメントとしてアップロードできます。サービスでアタッチメントを有効にしていない場合は、写真 URL とサムネイル URL を編集することのみが可能です。",
					div172: "[写真] フィールドと [サムネイル] フィールドは、存在する場合、常に使用され、フィーチャ サービスのアタッチメントは検索されません。",
					div173: "CSV とシェープファイルの例は次からダウンロード可能",
					div18: "CVS またはシェープファイルからのホスト フィーチャ サービスの作成",
					div19: "ホスト フィーチャ サービスを CSV またはシェープファイルから作成した場合、デフォルトではアタッチメントは有効化されません。これを有効化するには、フィーチャ サービスの詳細ページを開きます。そのページの [レイヤ] セクションで小さい矢印をクリックすると、そのオプションが表示されます。マップ ツアーは、属性を介して参照していた写真とサムネイルを引き続き使用します。必要に応じて、写真をフィーチャ サービスのアタッチメントとしてアップロードする場合、[写真] パネル上の 2 つのボタン (\"写真の変更\" と \"サムネイルの変更l\") を使用してそれを実行できます。",
					div20: "サポートされている写真の形式とビデオ",
					div21: "サポートされている写真の形式は <b>.jpg、.jpeg、.png、.gif、および .bmp</b> です。メディアがその拡張子で終わらない場合、マップ ツアーはそのメディアをビデオと見なします。ただし、フィーチャ サービスを使用している場合を除きます (下記を参照)。",
					div22: "マップ ツアー テンプレートにはビデオ プレイヤが含まれていないため、お気に入りのビデオ ホスト サービスで提供される外部ビデオ プレイヤを使用する必要があります (ビデオを埋め込むオプションを見つけ、表示されている URL を指定のコードにコピーします)。ビデオを自分でホストしたい場合は、<a href='http://www.videojs.com/'>Video.js</a> のように、ビデオ プレイヤを含む HTML ページを作成できます。",
					div23: "対話型ビルダでは、アタッチメントを含むフィーチャ サービスを使用しているときに、ビデオを埋め込むためのダイアログ ボックスが表示されません。しかし、対話型ビルダの外部でデータを編集して、これを行うことができます。arcgis.com マップ ビューアで、外部ビデオをポイントするよう [写真] フィールドを変更し、特別なパラメータ  (#isVideo)  を URL の末尾に追加すると、メディアはビデオと見なされます。",
					div24: "ただし、2 つの有効な写真のアタッチメントが存在している必要があります。存在していない場合、そのポイントは使用されません。[写真] フィールドと [サムネイル] フィールドが存在しないフィーチャ サービスのアタッチメントを使用している場合、ビデオは使用できません。"
				},
				tab3: {
					title: "カスタマイズ",
					div1: "ビルダは、上部パネルの [設定] ボタンで使用できる複数のカスタマイズ オプションを備えています。必要なオプションが見つからない場合、Web サーバに配置し、必要に応じて拡張できるダウンロード可能なバージョンも提供されています。",
					div2: "次の場合を除き、ホストされたバージョンを使用することを推奨します。",
					div3: "<li>ヘッダーの背景画像の使用など、必要な UI のカスタマイズが提供されていない場合</li><li>開発者がアプリケーションの拡張を行う場合</li>",
					div4: "ダウンロード可能なバージョンは、Web マップまたは Web マッピング アプリケーション ID を使用して構成できます。主に次のような場合に使用します。",
					div41: "ホストされた環境で対話型ビルダを使用してマップ ツアーを構築し、Web マッピング アプリケーション ID によってテンプレートを構成する場合。対話型ビルダによって定義した設定が適用されます。",
					div42: "対話型ビルダの外部で Web マップを構築し、Web マップ ID によってテンプレートを構成する場合。テンプレートの構成方法についてのドキュメントを参照する必要があります。",
					div43: "対話型ビルダは、ダウンロード可能なバージョンで入手できますが、バージョン 10 より前の Internet Explorer など、ブラウザに関するいくつかの技術的制約があるので、ご注意ください。",
					div5: "最新バージョンのテンプレートのダウンロード方法やその使用法の詳細については、<a href='https://github.com/Esri/map-tour-storytelling-template-js' target='_blank'>GitHub プロジェクト ページ</a>をご覧ください。"
				},
				tab4: {
					title: "ヒント",
					div0: "サポートされているブラウザ",
					div0a: "マップ ツアー ビューアは IE8+ でサポートされています。対話型ビルダは IE9+ でサポートされています。Esri はすべての主要ブラウザでビルダのテストを推進していますが、問題点が見つかった場合は、Chrome の使用をお勧めします。",
					div0b: "問題点が見つかった場合は、Esri にご連絡ください。また、CSV テンプレートを使用してマップを構築すると、ビルダのインタフェースとの対話処理が最小になります。",
					div1: "写真",
					div2: "縦方向ではなく横方向の写真を使用することをお勧めします。縦横比が 4:3 の写真が最適です。縦方向の画像を使用することはできますが、iPad のような小さい画面上では、大量の写真がキャプションによって不明瞭になることがあります (テキストを縦長の領域に表示すると、横長の領域に表示する場合よりも多くのスペースが使用されます)。マップ ツアーでは、さまざまなサイズ、形状、および方向の画像を使用できますが、正確に同じサイズと形状をすべての画像に対して使用することをお勧めします。そうすることで、ユーザがツアーを進めるときに、異なるサイズの画像に気を取られることがなくなります。",
					div2a: "メインの写真の最大画像サイズは横 1,000 ピクセル x 縦 750 ピクセル、サムネイルは 140 x 93 の画像の推奨します。",
					div3: "HTML タグを使用したキャプション テキストのフォーマット",
					div4: "フォーマットとリンクを定義する HTML タグを、ヘッダーおよび写真タイトル/キャプションに含めることができます。次のコードを含めると、黄色いリンクが追加されます。",
					div4a: "ツアーに適切なサブタイトルの入力",
					div4b: "よく考えて、説得力のあるツアーのサブタイトルを入力します。サブタイトルは、ユーザをツアーに引き込み、その内容を伝えるのに適しています。また、どの州や国でツアーが実施されるかを伝えるのに適しています。たとえば、ツアーの都市や町を利用者が知っているとは限りません。また、リンクを含める HTML タグなどを使用して、キャプションの書式を設定することもできます。ただし、キャプションはあまり長くしないでください。小さなブラウザ ウィンドウや iPad では、画面に収まらずクリップされてしまう可能性があります。適切なサブタイトルが思い浮かばない場合は、空白のままにしてください。",
					div5: "レイヤのサポート",
					div6: "さらにサポート レイヤを追加して、マップ ツアーにコンテキストを提供できます。それらのレイヤには、マップ ツアー ポイントに加えてマップに表示したい、分析範囲、ツアー ポイントを接続するウォーキング ルート、ドライブ ルートなどのジオグラフィック フィーチャを含めることができます。マップ ツアー テンプレートは、Web マップで指定したシンボルを使用して、これらの追加のサポート レイヤを表示します。ポップアップを使用することはできません。",
					div7: "ツアーを短く魅力的に",
					div8: "1 つのツアーにつき 99 ポイントまでという制限があります。当然、ほとんどのマップ ツアーは、この制限よりも大幅に短くなります。利用者はあまり多くのポイントを移動したがりません。自分では主題が魅力的だと思っていても、利用者もそう思うと考えてはいけません。",
					div9: "詳細については、<a href='https://github.com/Esri/map-tour-storytelling-template-js/raw/master/Readme.pdf' target='_blank'>詳細なガイド</a>をご参照ください。",
					div10: "埋め込みモード",
					div11: "iframe を使用してテンプレートを別の Web サイトに埋め込む場合は、オプションのパラメータ \"&embed\" を URL の末尾に追加すると、ヘッダーが削除されます。このモードは、ダウンロード可能なバージョンで構成ファイルを使用して設定することもできます。",
					div12: "マップ ツアーが反応しやすい小画面のタッチベースのレイアウトに切り替わってしまう原因となる狭い iFrame 幅は使用しないようにします。できるだけ使いやすくするために、マップ ツアーを埋め込むときは、ユーザがツアーを全画面で起動できるように、埋め込まれたツアーの横にリンクを設定することを常にお勧めします。" 
				},
				tab5: {
					title: "公開",
					div1: "完了したら、[共有] ボタンまたは ArcGIS Online のアプリケーション アイテム ページを使用して、必ずマップ ツアーを利用者と共有してください。",
					div2a: "ビルダを使用したツアーの共有",
					div2b: "[共有] ボタンを使用すると、アプリケーションと Web マップのアイテムが更新されます。ツアーのデータがフィーチャ サービスのアイテムに保存されている場合、そのアイテムも更新されます。ArcGIS.com マップ ビューアを使用してその他のレイヤを追加した場合、それらのレイヤは更新されません。このため、ツアーが想定通りに共有されない可能性があります。必要 (以上) の権限をすでに持っているアイテムは、更新されません。",
					div2c: "ArcGIS Online を使用したツアーの共有",
					div2d: "ArcGIS Online を使用してアプリケーションを共有するとき、同じ方法で共有されていない依存するリソース (Web マップ、フィーチャ サービス、デコレーション レイヤ) を更新するか、必要に応じて尋ねられます。マップ ツアーがパブリックである場合にリソースのうちのいずれかが利用者と共有されていないときは、ユーザは ArcGIS Online のログイン ページにリダイレクトされます。",
					div3t: "フィーチャ サービスのセキュリティ",
					div3a: "マップ ツアー ビルダによって作成された、ホスト フィーチャ サービスを使用している場合、アプリケーションはサービスのセキュリティを自動的に管理します。サービスをパブリックに共有している場合でも、編集権限を持つのはあなただけです。",
					div3t2: "利用者とツアーを共有する前に",
					div3: "ArcGIS.com アカウントでログインしていない状態で、ツアーが動作することを確認してください。使用する URL は、ログイン ページまたはビルダ モードにリダイレクトしてはなりません。",
					div4: "iPad を横向きにしてマップ ツアーの表示を確認し、この一般的なデバイスで適切に表示されることを確認してみることをお勧めします。これにより、写真上のキャプション表示領域が大きすぎないか確認できます。また、サブタイトルの長さが適切で、クリップされないことも確認できます。",
					div5a: "検索の推奨事項",
					div5b: "利用者がマップ ツアーを ArcGIS Online で検索する場合、ツアーがある州の名前や、米国外の場合は国名、および 'public art'、'tourist guide'、'historic places' のような主題タグとともに、'story map' タグをマップ ツアーの (Web マップ アイテム ページではなく) アプリケーション アイテム ページに追加することをお勧めします。これらのタグは、Esri がギャラリーで提示したりソーシャル メディアで宣伝したりする新しいツアーの優れた例を見つけるのにも役立ちます。また、ツアーの小さなスクリーンショットやその写真の 1 つなど、見栄えの良いサムネイル グラフィックスをアプリケーション アイテム ページにアップロードすることもお勧めします。この写真は、マップ ツアーを ArcGIS Online ギャラリーに追加する場合に自動的に使用されます。"
				}
			},
			share: {
				firstSaveTitle: "ツアーが保存されました",
				firstSaveHeader: "ツアーが ArcGIS Online に保存されました。以下のよくある質問の答えをお読みください。",
				firstSaveA1: "ArcGIS Online の操作に慣れていない、または作成インタフェースに簡単にアクセスしたい場合は、次のリンクを保存できます: %LINK1%",
				firstSaveA1bis: "ツアーは、<a href='%LINK2%' target='_blank'>ArcGIS Online のコンテンツ フォルダ</a>にもあります。",
				firstSaveQ2: "私のツアーは共有されていますか？",
				firstSaveA2: "現在、ツアーは共有されていません。共有するには、[共有] ボタンを使用します。",
				shareTitle: "ツアーの共有",
				sharePrivateHeader: "ツアーが共有されていません。共有しますか？",
				sharePrivateBtn1: "パブリックに共有",
				sharePrivateBtn2: "組織サイト内で共有",
				sharePrivateProgress: "共有の実行中...",
				sharePrivateErr: "共有に失敗しました。もう一度行ってください。",
				sharePrivateOk: "共有の更新に成功しました。読み込んでいます...",
				sharePreviewAsUser: "プレビュー",
				shareHeader1: "ツアーには<strong>一般ユーザがアクセス</strong>できます。",
				shareHeader2: "ツアーには、組織サイトのメンバーがアクセスできます (ログインが必要)。",
				shareLinkHeader: "ツアーを一般ユーザと共有",
				shareLinkOpen: "オープン",
				shareQ1Opt1: "ツアーをプライベートにするには？",
				shareQ1Opt2: "ツアーをプライベートのままにしたりパブリックに共有したりする方法",
				shareA1: "<a href='%LINK1%' target='_blank'>アプリケーション アイテム ページ</a>で %SHAREIMG% を使用します。Web マップの共有も解除する場合は、<a href='%LINK2%' target='_blank'>Web マップ アイテム ページ</a>を使用します。",
				shareA1bis: "フィーチャ サービスの共有も解除する場合は、<a href='%LINK1%' target='_blank'>フィーチャ サービス アイテム ページ</a>を使用します。",
				shareQ2: "ツアーを後で編集する方法",
				shareQ2bis: "作成インタフェースに戻る方法",
				shareA2div1: "次のリンク %LINK1% を保存および再利用するか、<a href='%LINK2%' target='_blank'>アプリケーション アイテム ページ</a>を使用します。",
				shareA2div2: "アプリケーションの所有者として ArcGIS.com にサイン インした場合、アプリケーションに対話型ビルダを開くボタンが含まれます。",				
				shareQ3: "データの保存場所は？",
				shareA3: "ツアーの構成は、<a href='%LINK1%' target='_blank'>この Web アイテム</a>と<a href='%LINK2%' target='_blank'>この Web アプリケーション アイテム</a>に保存されます。Flickr、Picasa、および Facebook の画像と YouTube ビデオはそのまま各サイトで参照され、ArcGIS Online に複製されることはありません。",
				shareWarning: "<a href='%LINK%' target='_blank'>Web マップ</a>の所有者でないため、%WITH% の共有は無効化されています。",
				shareWarningWith1: "パブリック",
				shareWarningWith2: "パブリックおよび組織"
			}
        }
    })
);
