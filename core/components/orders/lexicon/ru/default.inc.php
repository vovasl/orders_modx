<?php
include_once 'setting.inc.php';

$_lang['orders'] = 'Заказы';
$_lang['orders_menu_desc'] = 'Список заказов';
$_lang['orders_grid_actions'] = 'Действия';
$_lang['orders_invalid_data'] = 'Параметр data не был передан';
$_lang['orders_id'] = 'ID';

$_lang['settings'] = 'Настройки';

$_lang['orders_field_default'] = 'По умолчанию';
$_lang['orders_field_checkbox_label'] = 'Да';

$_lang['orders_item_actions'] = 'Действия';
$_lang['orders_item_id'] = 'ID';
$_lang['orders_item_created'] = 'Дата создания';
$_lang['orders_item_search'] = '№ контейнера, B\L, Клиент, № агента 1, № агента 2';
$_lang['orders_item_search_car_number'] = 'Номер машины';
$_lang['orders_item_search_bill_entry_number'] = '№ ДТ';
$_lang['orders_item_filter_default'] = 'Показать все';
$_lang['orders_item_filter_important'] = 'Показать важные';
$_lang['orders_item_filter_archive'] = 'Показать архивированные';
$_lang['orders_item_filter_hidden'] = 'Показать скрытые';
$_lang['orders_item_filter_color_empty_text'] = 'по цвету';
$_lang['orders_item_filter_receiver_empty_text'] = 'по CONSIGNEE';
$_lang['orders_item_filter_manager_empty_text'] = 'Менеджер по ведению';
$_lang['orders_item_filter_station_train_arrive_empty_text'] = 'по Станциям';
$_lang['orders_item_filter_port_arrive_empty_text'] = 'по P. DISCHARGE';

$_lang['orders_item_tab_item'] = 'Заказ';
$_lang['orders_item_tab_calculations'] = 'Временно';
$_lang['orders_item_tab_factories'] = 'Фабрики';

$_lang['orders_item_title'] = 'Заказы';
$_lang['orders_item_intro_msg'] = 'Вы можете выделять сразу несколько заказов при помощи Shift или Ctrl.';
$_lang['orders_item_create'] = 'Создать заказ';
$_lang['orders_item_remove'] = 'Удалить заказ';
$_lang['orders_items_remove'] = 'Удалить заказы';
$_lang['orders_item_remove_confirm'] = 'Вы уверены, что хотите удалить этот заказ?';
$_lang['orders_items_remove_confirm'] = 'Вы уверены, что хотите удалить эти заказы?';
$_lang['orders_item_update'] = 'Изменить заказ';
$_lang['orders_items_update'] = 'Изменить заказы';
$_lang['orders_item_enable'] = 'Отображать заказ';
$_lang['orders_items_enable'] = 'Отображать заказы';
$_lang['orders_item_disable'] = 'Скрыть заказ';
$_lang['orders_items_disable'] = 'Скрыть заказы';
$_lang['orders_item_zip'] = 'Добавить в архив';
$_lang['orders_items_zip'] = 'Добавить в архив';
$_lang['orders_item_unzip'] = 'Восстановить из архива';
$_lang['orders_items_unzip'] = 'Восстановить из архива';
$_lang['orders_item_important'] = 'Добавить в важные';
$_lang['orders_items_important'] = 'Добавить в важные';
$_lang['orders_item_unimportant'] = 'Снять отметку важные';
$_lang['orders_items_unimportant'] = 'Снять отметку важные';
$_lang['orders_item_err_nf'] = 'Заказ не найден';
$_lang['orders_item_err_ns'] = 'Заказ не указан';
$_lang['orders_item_container_number'] = '№ контейнера';
$_lang['orders_item_bl'] = 'B\L';
$_lang['orders_item_agent_number'] = '№ агента 1';
$_lang['orders_item_agent_china_number'] = '№ агента 2';
$_lang['orders_item_bill_entry_number'] = '№ ДТ';
$_lang['orders_item_manager'] = 'Менеджер';
$_lang['orders_item_manager2'] = 'Менеджер по ведению';
$_lang['orders_item_client'] = 'Клиент';
$_lang['orders_item_goods'] = 'Груз';
$_lang['orders_item_delivery_term'] = 'Базис';
$_lang['orders_item_port_departure'] = 'P. LOADING';
$_lang['orders_item_city_delivery'] = 'Город доставки';
$_lang['orders_item_container_type'] = 'тип К.';
$_lang['orders_item_volume'] = 'CBM';
$_lang['orders_item_weight'] = 'KGS';
$_lang['orders_item_count_boxes'] = 'CTN';
$_lang['orders_item_port_arrive'] = 'P. DISCHARGE';
$_lang['orders_item_line'] = 'Линия(фрахт)';
$_lang['orders_item_agent_railway'] = 'ЖД ПЕРЕВОЗ.';
$_lang['orders_item_station_train_arrive'] = 'Станция';
$_lang['orders_item_receiver'] = 'CONSIGNEE';
$_lang['orders_item_delivery_term_receiver'] = 'Контракт';
$_lang['orders_item_sale'] = 'продажа Отгрузки';
$_lang['orders_item_accounts'] = 'инстр. Счета';
$_lang['orders_item_tax_payments'] = 'ШОЛИНА';
$_lang['orders_item_tax_payments_nds'] = 'НДС';
$_lang['orders_item_sender'] = 'SHIPPER';
$_lang['orders_item_forwarder'] = 'NOTIFY PARTY';
$_lang['orders_item_application_date'] = 'Заявка от клиента';
$_lang['orders_item_availability_date'] = 'Дата готовности';
$_lang['orders_item_booking'] = 'Букинг';
$_lang['orders_item_factory_supply'] = 'Подача на фабрику';
$_lang['orders_item_port_departure_date'] = 'Вых. ETD';
$_lang['orders_item_port_arrive_date'] = 'Приб. ETA';
$_lang['orders_item_release'] = 'Релиз';
$_lang['orders_item_release_label'] = 'Да';
$_lang['orders_item_release_date'] = 'Д. Релиза';
$_lang['orders_item_pdt'] = 'Подача ДТ';
$_lang['orders_item_examination'] = 'Досмотр';
$_lang['orders_item_examined'] = 'Досмотрен';
$_lang['orders_item_vdt'] = 'Выпуск ДТ';
$_lang['orders_item_train_departure_date'] = 'Дата выхода ЖД';
$_lang['orders_item_train_arrive_date'] = 'Приб. ЖД';
$_lang['orders_item_distance_to_station'] = 'Остаточное расстояние, км';
$_lang['orders_item_stations'] = 'Станция этап';
$_lang['orders_item_export_from_station'] = 'Раскредитован';
$_lang['orders_item_export_from_station_real'] = 'Д. Вывоза';
$_lang['orders_item_delivery_date'] = 'выгр. Авто';
$_lang['orders_item_delivery_container_date'] = 'Д. Сдачи порожнего';
$_lang['orders_item_note'] = 'Примечание';
$_lang['orders_item_company'] = 'Компания';
$_lang['orders_item_company_warehouse'] = 'Компания на выгрузке на складе';
$_lang['orders_item_address'] = 'Адрес доставки';
$_lang['orders_item_contact_person'] = 'Контактное лицо';
$_lang['orders_item_contact_person_phone'] = 'Телефон';
$_lang['orders_item_address_container'] = 'Адрес сдачи порожнего контейнера';
$_lang['orders_item_car_carrier'] = 'Авто перевозчик';
$_lang['orders_item_car_carrier_rate'] = 'Ставка авто';
$_lang['orders_item_car_number'] = '№ ТС';
$_lang['orders_item_driver'] = 'ФИО водителя';
$_lang['orders_item_driver_phone'] = 'Телефон';
$_lang['orders_item_color'] = 'Цвет строки';
$_lang['orders_item_total'] = 'Фрахт, USD';
$_lang['orders_item_exchange_rate'] = 'Курс';
$_lang['orders_item_d_application'] = 'Д.заявка';
$_lang['orders_item_d_application_4'] = 'Д.заявка 4';
$_lang['orders_item_d_payment'] = 'Д.оплата';
$_lang['orders_item_d_payment_4'] = 'Д.оплата 4';
$_lang['orders_item_closed'] = 'Закрыта';
$_lang['orders_item_agent'] = 'Агент';
$_lang['orders_item_note_2'] = 'Примечание 2';
$_lang['orders_item_note_3'] = 'Примечание 3';
$_lang['orders_item_rate_rur'] = 'Ставка клиенту';
$_lang['orders_item_rate_usd'] = 'USD став.';
$_lang['orders_item_closed_2'] = 'Закрыта 2';
$_lang['orders_item_d_closed'] = 'Д.закрытия';
$_lang['orders_item_com_zebra'] = 'КБ.ЗЕБР';
$_lang['orders_item_note_4'] = 'Примечание 4';
$_lang['orders_item_payment_form'] = 'нал/без';
$_lang['orders_item_currency'] = 'Вал.';
$_lang['orders_item_currency_2'] = 'Вал. 2';
$_lang['orders_item_currency_3'] = 'Вал. 3';
$_lang['orders_item_currency_4'] = 'Вал. 4';
$_lang['orders_item_account_number'] = '№ сч.';
$_lang['orders_item_account_number_2'] = '№ сч. 2';
$_lang['orders_item_account_number_3'] = '№ сч. 3';
$_lang['orders_item_account_number_4'] = '№ сч. 4';
$_lang['orders_item_customs_fee'] = 'ТП USD';
$_lang['orders_item_closed_3'] = 'Закрыта 3';
$_lang['orders_item_closed_4'] = 'Закрыта 4';
$_lang['orders_item_closed_5'] = 'Закрыта 5';
$_lang['orders_item_total_2'] = 'Сумма 2, USD';
$_lang['orders_item_total_3'] = 'Сумма 3, USD';
$_lang['orders_item_total_4'] = 'Сумма 4, USD';
$_lang['orders_item_exw'] = 'EXW, USD';
$_lang['orders_item_combo_empty_text'] = ' - ';
$_lang['orders_item_xls_title_text'] = 'Скачать XLS файл';
$_lang['orders_item_email_title_text'] = 'Отправить на E-mail';
$_lang['orders_item_email_succ_text'] = 'E-mail успешно отправлен';
$_lang['orders_item_shipper_2'] = 'SHIPPER 2';
$_lang['orders_item_shipper_3'] = 'SHIPPER 3';
$_lang['orders_item_shipper_4'] = 'SHIPPER 4';
$_lang['orders_item_shipper_5'] = 'SHIPPER 5';
$_lang['orders_item_bl_2'] = 'B\L 2';
$_lang['orders_item_bl_3'] = 'B\L 3';
$_lang['orders_item_bl_4'] = 'B\L 4';
$_lang['orders_item_bl_5'] = 'B\L 5';
$_lang['orders_item_agent_2'] = 'Agent 2';
$_lang['orders_item_agent_3'] = 'Agent 3';
$_lang['orders_item_agent_4'] = 'Agent 4';
$_lang['orders_item_agent_5'] = 'Agent 5';
$_lang['orders_item_invoice_2'] = 'INVOICE/d.d. 2';
$_lang['orders_item_invoice_3'] = 'INVOICE/d.d. 3';
$_lang['orders_item_invoice_4'] = 'INVOICE/d.d. 4';
$_lang['orders_item_invoice_5'] = 'INVOICE/d.d. 5';
$_lang['orders_item_ready_date_2'] = 'READY DATE 2';
$_lang['orders_item_ready_date_3'] = 'READY DATE 3';
$_lang['orders_item_ready_date_4'] = 'READY DATE 4';
$_lang['orders_item_ready_date_5'] = 'READY DATE 5';
$_lang['orders_item_goods_2'] = 'GOODS 2';
$_lang['orders_item_goods_3'] = 'GOODS 3';
$_lang['orders_item_goods_4'] = 'GOODS 4';
$_lang['orders_item_goods_5'] = 'GOODS 5';
$_lang['orders_item_cbm_2'] = 'CBM 2';
$_lang['orders_item_cbm_3'] = 'CBM 3';
$_lang['orders_item_cbm_4'] = 'CBM 4';
$_lang['orders_item_cbm_5'] = 'CBM 5';
$_lang['orders_item_kgs_2'] = 'KGS 2';
$_lang['orders_item_kgs_3'] = 'KGS 3';
$_lang['orders_item_kgs_4'] = 'KGS 4';
$_lang['orders_item_kgs_5'] = 'KGS 5';
$_lang['orders_item_ctn_2'] = 'CTN 2';
$_lang['orders_item_ctn_3'] = 'CTN 3';
$_lang['orders_item_ctn_4'] = 'CTN 4';
$_lang['orders_item_ctn_5'] = 'CTN 5';
$_lang['orders_item_note_s_2'] = 'Примечание 2';
$_lang['orders_item_note_s_3'] = 'Примечание 3';
$_lang['orders_item_note_s_4'] = 'Примечание 4';
$_lang['orders_item_note_s_5'] = 'Примечание 5';

$_lang['orders_item_reports_intro_msg'] = 'Сформировать отчет в формате Excel';
$_lang['orders_item_reports_field_port_arrive_date_start'] = 'Приб. ETA c';
$_lang['orders_item_reports_field_port_arrive_date_finish'] = 'Приб. ETA по';
$_lang['orders_item_reports_field_train_arrive_date_start'] = 'Приб. ЖД с';
$_lang['orders_item_reports_field_train_arrive_date_finish'] = 'Приб. ЖД по';
$_lang['orders_item_reports_field_sort'] = 'Сортировать по';
$_lang['orders_item_reports_button_export'] = 'Создать отчет';


$_lang['orders_manager_title'] = 'Менеджеры';
$_lang['orders_manager_intro_msg'] = 'Вы можете выделять сразу несколько менеджеров при помощи Shift или Ctrl.';
$_lang['orders_manager_name'] = 'ФИО';
$_lang['orders_manager_phone'] = 'Телефон';
$_lang['orders_managers_name'] = 'Менеджер';
$_lang['orders_manager_create'] = 'Создать менеджера';
$_lang['orders_manager_remove'] = 'Удалить менеджера';
$_lang['orders_managers_remove'] = 'Удалить менеджеров';
$_lang['orders_manager_remove_confirm'] = 'Вы уверены, что хотите удалить этого менеджера?';
$_lang['orders_managers_remove_confirm'] = 'Вы уверены, что хотите удалить этих менеджеров?';
$_lang['orders_manager_update'] = 'Изменить данные о менеджере';
$_lang['orders_manager_err_name'] = 'Вы должны указать имя менеджера.';
$_lang['orders_manager_err_ae'] = 'Менеджер с таким именем уже существует';
$_lang['orders_manager_client_err_ae'] = 'Менеджер уже добавлен к клиенту';
$_lang['orders_manager_err_nf'] = 'Менеджер не найден';
$_lang['orders_manager_err_ns'] = 'Менеджер не указан';

$_lang['orders_managers2_name'] = 'Менеджеры по ведению';


$_lang['orders_goods_title'] = 'Товары';
$_lang['orders_goods_intro_msg'] = 'Вы можете выделять сразу несколько товаров при помощи Shift или Ctrl.';
$_lang['orders_goods_name'] = 'Товар';
$_lang['orders_goods_create'] = 'Создать товар';
$_lang['orders_goods_remove'] = 'Удалить товар';
$_lang['orders_products_remove'] = 'Удалить товары';
$_lang['orders_goods_remove_confirm'] = 'Вы уверены, что хотите удалить этот товар?';
$_lang['orders_products_remove_confirm'] = 'Вы уверены, что хотите удалить эти товары?';
$_lang['orders_goods_update'] = 'Изменить данные о товаре';
$_lang['orders_goods_err_name'] = 'Вы должны указать название товара.';
$_lang['orders_goods_err_ae'] = 'Товар с таким именем уже существует';
$_lang['orders_goods_client_err_ae'] = 'Товар уже добавлен к клиенту';
$_lang['orders_goods_err_nf'] = 'Товар не найден';
$_lang['orders_goods_err_ns'] = 'Товар не указан';

$_lang['orders_address_title'] = 'Адреса';
$_lang['orders_address_intro_msg'] = 'Вы можете выделять сразу несколько адресов при помощи Shift или Ctrl.';
$_lang['orders_address_name'] = 'Адрес';
$_lang['orders_address_create'] = 'Создать адрес';
$_lang['orders_address_remove'] = 'Удалить адрес';
$_lang['orders_addresses_remove'] = 'Удалить адреса';
$_lang['orders_address_remove_confirm'] = 'Вы уверены, что хотите удалить этот адрес?';
$_lang['orders_addresses_remove_confirm'] = 'Вы уверены, что хотите удалить эти адреса?';
$_lang['orders_address_update'] = 'Изменить адрес';
$_lang['orders_address_err_name'] = 'Вы должны указать адрес';
$_lang['orders_address_err_ae'] = 'Адрес уже существует';
$_lang['orders_address_err_nf'] = 'Адрес не найден';
$_lang['orders_address_err_ns'] = 'Адрес не указан';

$_lang['orders_line_title'] = 'Линии(фрахт)';
$_lang['orders_line_intro_msg'] = 'Вы можете выделять сразу несколько линий при помощи Shift или Ctrl.';
$_lang['orders_line_name'] = 'Линия';
$_lang['orders_line_create'] = 'Создать линию';
$_lang['orders_line_remove'] = 'Удалить линию';
$_lang['orders_lines_remove'] = 'Удалить линии';
$_lang['orders_line_remove_confirm'] = 'Вы уверены, что хотите удалить эту линию?';
$_lang['orders_lines_remove_confirm'] = 'Вы уверены, что хотите удалить эти линии?';
$_lang['orders_line_update'] = 'Изменить данные о линии';
$_lang['orders_line_err_name'] = 'Вы должны указать название линии';
$_lang['orders_line_err_ae'] = 'Линия с таким именем уже существует';
$_lang['orders_line_err_nf'] = 'Линия не найдена';
$_lang['orders_line_err_ns'] = 'Линия не указана';

$_lang['orders_container_type_title'] = 'Типы контейнеров';
$_lang['orders_container_type_intro_msg'] = 'Вы можете выделять сразу несколько типов контейнеров при помощи Shift или Ctrl.';
$_lang['orders_container_type_name'] = 'Тип контейнера';
$_lang['orders_container_type_create'] = 'Создать тип контейнера';
$_lang['orders_container_type_remove'] = 'Удалить тип контейнера';
$_lang['orders_container_types_remove'] = 'Удалить типы контейнеров';
$_lang['orders_container_type_remove_confirm'] = 'Вы уверены, что хотите удалить этот тип контейнера?';
$_lang['orders_container_types_remove_confirm'] = 'Вы уверены, что хотите удалить эти типы контейнеров?';
$_lang['orders_container_type_update'] = 'Изменить данные о типе контейнера';
$_lang['orders_container_type_err_name'] = 'Вы должны указать название типа контейнера';
$_lang['orders_container_type_err_ae'] = 'Тип контейнера с таким именем уже существует';
$_lang['orders_container_type_err_nf'] = 'Тип контейнера не найден';
$_lang['orders_container_type_err_ns'] = 'Тип контейнера не указан';

$_lang['orders_delivery_term_title'] = 'Базисы';
$_lang['orders_delivery_term_intro_msg'] = 'Вы можете выделять сразу несколько базисов при помощи Shift или Ctrl.';
$_lang['orders_delivery_term_name'] = 'Название базиса';
$_lang['orders_delivery_terms_name'] = 'Базисы';
$_lang['orders_delivery_term_create'] = 'Создать базис';
$_lang['orders_delivery_term_remove'] = 'Удалить базис';
$_lang['orders_delivery_terms_remove'] = 'Удалить базисы';
$_lang['orders_delivery_term_remove_confirm'] = 'Вы уверены, что хотите удалить этот базис?';
$_lang['orders_delivery_terms_remove_confirm'] = 'Вы уверены, что хотите удалить эти базисы?';
$_lang['orders_delivery_term_update'] = 'Изменить данные о базисе';
$_lang['orders_delivery_term_err_name'] = 'Вы должны указать название базиса';
$_lang['orders_delivery_term_err_ae'] = 'Базис с таким именем уже существует';
$_lang['orders_delivery_term_err_nf'] = 'Базис не найден';
$_lang['orders_delivery_term_err_ns'] = 'Базис не указан';

$_lang['orders_sale_note_title'] = 'Продажи';
$_lang['orders_sale_note_intro_msg'] = 'Вы можете выделять сразу несколько продаж при помощи Shift или Ctrl.';
$_lang['orders_sale_note_name'] = 'Название продажи';
$_lang['orders_sale_notes_name'] = 'Продажи';
$_lang['orders_sale_note_create'] = 'Создать продажу';
$_lang['orders_sale_note_remove'] = 'Удалить продажу';
$_lang['orders_sale_notes_remove'] = 'Удалить продажи';
$_lang['orders_sale_note_remove_confirm'] = 'Вы уверены, что хотите удалить эту продажу?';
$_lang['orders_sale_notes_remove_confirm'] = 'Вы уверены, что хотите удалить эти продажи?';
$_lang['orders_sale_note_update'] = 'Изменить данные о продаже';
$_lang['orders_sale_note_err_name'] = 'Вы должны указать название продажи';
$_lang['orders_sale_note_err_ae'] = 'Продажа с таким именем уже существует';
$_lang['orders_sale_note_err_nf'] = 'Продажа не найдена';
$_lang['orders_sale_note_err_ns'] = 'Продажа не указана';

$_lang['orders_accounts_note_title'] = 'Счета';
$_lang['orders_accounts_note_intro_msg'] = 'Вы можете выделять сразу несколько счетов при помощи Shift или Ctrl.';
$_lang['orders_accounts_note_name'] = 'Название счета';
$_lang['orders_accounts_notes_name'] = 'Счета';
$_lang['orders_accounts_note_create'] = 'Создать счет';
$_lang['orders_accounts_note_remove'] = 'Удалить счет';
$_lang['orders_accounts_notes_remove'] = 'Удалить счета';
$_lang['orders_accounts_note_remove_confirm'] = 'Вы уверены, что хотите удалить этот счет?';
$_lang['orders_accounts_notes_remove_confirm'] = 'Вы уверены, что хотите удалить эти счета?';
$_lang['orders_accounts_note_update'] = 'Изменить данные о счете';
$_lang['orders_accounts_note_err_name'] = 'Вы должны указать название счета';
$_lang['orders_accounts_note_err_ae'] = 'Счет с таким именем уже существует';
$_lang['orders_accounts_note_err_nf'] = 'Счет не найден';
$_lang['orders_accounts_note_err_ns'] = 'Счет не указан';

$_lang['orders_port_arrive_title'] = 'P. DISCHARGE';
$_lang['orders_port_arrive_intro_msg'] = 'Вы можете выделять сразу несколько P. DISCHARGE при помощи Shift или Ctrl.';
$_lang['orders_port_arrive_name'] = 'Название P. DISCHARGE';
$_lang['orders_ports_arrive_name'] = 'P. DISCHARGE';
$_lang['orders_port_arrive_create'] = 'Создать P. DISCHARGE';
$_lang['orders_port_arrive_remove'] = 'Удалить P. DISCHARGE';
$_lang['orders_ports_arrive_remove'] = 'Удалить P. DISCHARGE';
$_lang['orders_port_arrive_remove_confirm'] = 'Вы уверены, что хотите удалить этот P. DISCHARGE?';
$_lang['orders_ports_arrive_remove_confirm'] = 'Вы уверены, что хотите удалить эти P. DISCHARGE?';
$_lang['orders_port_arrive_update'] = 'Изменить данные о P. DISCHARGE';
$_lang['orders_port_arrive_err_name'] = 'Вы должны указать название P. DISCHARGE';
$_lang['orders_port_arrive_err_ae'] = 'P. DISCHARGE с таким именем уже существует';
$_lang['orders_port_arrive_err_nf'] = 'P. DISCHARGE не найден';
$_lang['orders_port_arrive_err_ns'] = 'P. DISCHARGE не указан';

$_lang['orders_port_departure_title'] = 'P. LOADING';
$_lang['orders_port_departure_intro_msg'] = 'Вы можете выделять сразу несколько P. LOADING при помощи Shift или Ctrl.';
$_lang['orders_port_departure_name'] = 'Название P. LOADING';
$_lang['orders_ports_departure_name'] = 'P. LOADING';
$_lang['orders_port_departure_create'] = 'Создать P. LOADING';
$_lang['orders_port_departure_remove'] = 'Удалить P. LOADING';
$_lang['orders_ports_departure_remove'] = 'Удалить P. LOADING';
$_lang['orders_port_departure_remove_confirm'] = 'Вы уверены, что хотите удалить этот P. LOADING?';
$_lang['orders_ports_departure_remove_confirm'] = 'Вы уверены, что хотите удалить эти P. LOADING?';
$_lang['orders_port_departure_update'] = 'Изменить данные о P. LOADING';
$_lang['orders_port_departure_err_name'] = 'Вы должны указать название P. LOADING';
$_lang['orders_port_departure_err_ae'] = 'P. LOADING с таким именем уже существует';
$_lang['orders_port_departure_err_nf'] = 'P. LOADING не найден';
$_lang['orders_port_departure_err_ns'] = 'P. LOADING не указан';


$_lang['orders_city_delivery_title'] = 'Города доставки';
$_lang['orders_city_delivery_intro_msg'] = 'Вы можете выделять сразу несколько городов доставки при помощи Shift или Ctrl.';
$_lang['orders_city_delivery_name'] = 'Город доставки';
$_lang['orders_city_delivery_create'] = 'Создать город доставки';
$_lang['orders_city_delivery_remove'] = 'Удалить город доставки';
$_lang['orders_cities_delivery_remove'] = 'Удалить города доставки';
$_lang['orders_city_delivery_remove_confirm'] = 'Вы уверены, что хотите удалить этот город доставки?';
$_lang['orders_cities_delivery_remove_confirm'] = 'Вы уверены, что хотите удалить эти города доставки?';
$_lang['orders_city_delivery_update'] = 'Изменить данные о городе доставки';
$_lang['orders_city_delivery_err_name'] = 'Вы должны указать название города доставки';
$_lang['orders_city_delivery_err_ae'] = 'Город доставки с таким именем уже существует';
$_lang['orders_city_delivery_err_nf'] = 'Город доставки не найден';
$_lang['orders_city_delivery_err_ns'] = 'Город доставки не указан';


$_lang['orders_station_train_arrive_title'] = 'Станции';
$_lang['orders_station_train_arrive_intro_msg'] = 'Вы можете выделять сразу несколько станций при помощи Shift или Ctrl.';
$_lang['orders_station_train_arrive_name'] = 'Название станции';
$_lang['orders_stations_train_arrive_name'] = 'Станции';
$_lang['orders_station_train_arrive_create'] = 'Создать станцию';
$_lang['orders_station_train_arrive_remove'] = 'Удалить станцию';
$_lang['orders_stations_train_arrive_remove'] = 'Удалить станции';
$_lang['orders_station_train_arrive_remove_confirm'] = 'Вы уверены, что хотите удалить эту станцию?';
$_lang['orders_stations_train_arrive_remove_confirm'] = 'Вы уверены, что хотите удалить эти станции?';
$_lang['orders_station_train_arrive_update'] = 'Изменить данные о станции';
$_lang['orders_station_train_arrive_err_name'] = 'Вы должны указать название станции';
$_lang['orders_station_train_arrive_err_ae'] = 'Станция с таким именем уже существует';
$_lang['orders_station_train_arrive_err_nf'] = 'Станция не найдена';
$_lang['orders_station_train_arrive_err_ns'] = 'Станция не указана';


$_lang['orders_delivery_term_receiver_title'] = 'Контракты';
$_lang['orders_delivery_term_receiver_intro_msg'] = 'Вы можете выделять сразу несколько контрактов при помощи Shift или Ctrl.';
$_lang['orders_delivery_term_receiver_name'] = 'Название контракта';
$_lang['orders_delivery_term_receivers_name'] = 'Контракты';
$_lang['orders_delivery_term_receiver_create'] = 'Создать контракт';
$_lang['orders_delivery_term_receiver_remove'] = 'Удалить контракт';
$_lang['orders_delivery_term_receivers_remove'] = 'Удалить контракты';
$_lang['orders_delivery_term_receiver_remove_confirm'] = 'Вы уверены, что хотите удалить этот контракт?';
$_lang['orders_delivery_term_receivers_remove_confirm'] = 'Вы уверены, что хотите удалить эти контракты?';
$_lang['orders_delivery_term_receiver_update'] = 'Изменить данные об контракте';
$_lang['orders_delivery_term_receiver_err_name'] = 'Вы должны указать название контракта';
$_lang['orders_delivery_term_receiver_err_ae'] = 'Контракт с таким именем уже существует';
$_lang['orders_delivery_term_receiver_err_nf'] = 'Контракт не найден';
$_lang['orders_delivery_term_receiver_err_ns'] = 'Контракт не указан';

$_lang['orders_address_container_title'] = 'Адреса cдачи порожнего контейнера';
$_lang['orders_address_container_intro_msg'] = 'Вы можете выделять сразу несколько адресов cдачи порожнего контейнера при помощи Shift или Ctrl.';
$_lang['orders_address_container_name'] = 'Адрес cдачи порожнего контейнера';
$_lang['orders_address_container_create'] = 'Создать адрес cдачи порожнего контейнера';
$_lang['orders_address_container_remove'] = 'Удалить адрес cдачи порожнего контейнера';
$_lang['orders_addresses_container_remove'] = 'Удалить адреса cдачи порожнего контейнера';
$_lang['orders_address_container_remove_confirm'] = 'Вы уверены, что хотите удалить этот адрес cдачи порожнего контейнера?';
$_lang['orders_addresses_container_remove_confirm'] = 'Вы уверены, что хотите удалить эти адреса cдачи порожнего контейнера?';
$_lang['orders_address_container_update'] = 'Изменить адрес cдачи порожнего контейнера';
$_lang['orders_address_container_err_name'] = 'Вы должны указать адрес cдачи порожнего контейнера';
$_lang['orders_address_container_err_ae'] = 'Адрес cдачи порожнего контейнера уже существует';
$_lang['orders_address_container_err_nf'] = 'Адрес cдачи порожнего контейнера не найден';
$_lang['orders_address_container_err_ns'] = 'Адрес cдачи порожнего контейнера не указан';


$_lang['orders_agent_railway_title'] = 'ЖД перевозчики';
$_lang['orders_agent_railway_intro_msg'] = 'Вы можете выделять сразу несколько ЖД перевозчиков при помощи Shift или Ctrl.';
$_lang['orders_agent_railway_name'] = 'Название ЖД перевозчика';
$_lang['orders_agents_railway_name'] = 'ЖД перевозчики';
$_lang['orders_agent_railway_create'] = 'Создать ЖД перевозчика';
$_lang['orders_agent_railway_remove'] = 'Удалить ЖД перевозчика';
$_lang['orders_agents_railway_remove'] = 'Удалить ЖД перевозчиков';
$_lang['orders_agent_railway_remove_confirm'] = 'Вы уверены, что хотите удалить этого ЖД перевозчика?';
$_lang['orders_agents_railway_remove_confirm'] = 'Вы уверены, что хотите удалить этих ЖД перевозчиков?';
$_lang['orders_agent_railway_update'] = 'Изменить данные о ЖД перевозчике';
$_lang['orders_agent_railway_err_name'] = 'Вы должны указать название ЖД перевозчика';
$_lang['orders_agent_railway_err_ae'] = 'ЖД перевозчик с таким именем уже существует';
$_lang['orders_agent_railway_err_nf'] = 'ЖД перевозчик не найден';
$_lang['orders_agent_railway_err_ns'] = 'ЖД перевозчик не указан';

$_lang['orders_car_carrier_title'] = 'Авто перевозчики';
$_lang['orders_car_carrier_intro_msg'] = 'Вы можете выделять сразу несколько авто перевозчиков при помощи Shift или Ctrl.';
$_lang['orders_car_carrier_name'] = 'Название авто перевозчика';
$_lang['orders_carriers_name'] = 'Авто перевозчики';
$_lang['orders_car_carrier_create'] = 'Создать авто перевозчика';
$_lang['orders_car_carrier_remove'] = 'Удалить авто перевозчика';
$_lang['orders_carriers_remove'] = 'Удалить авто перевозчиков';
$_lang['orders_car_carrier_remove_confirm'] = 'Вы уверены, что хотите удалить этого авто перевозчика?';
$_lang['orders_carriers_remove_confirm'] = 'Вы уверены, что хотите удалить этих авто перевозчиков?';
$_lang['orders_car_carrier_update'] = 'Изменить данные о авто перевозчике';
$_lang['orders_car_carrier_err_name'] = 'Вы должны указать название авто перевозчика.';
$_lang['orders_car_carrier_err_ae'] = 'Авто перевозчик с таким именем уже существует';
$_lang['orders_car_carrier_err_nf'] = 'Авто перевозчик не найден';
$_lang['orders_car_carrier_err_ns'] = 'Авто перевозчик не указан';


$_lang['orders_company_warehouse_title'] = 'Компании на выгрузке на складе';
$_lang['orders_company_warehouse_intro_msg'] = 'Вы можете выделять сразу несколько компаний на выгрузке на складе при помощи Shift или Ctrl.';
$_lang['orders_company_warehouse_name'] = 'Название компании на выгрузке на складе';
$_lang['orders_companies_warehouse_name'] = 'Компании на выгрузке на складе';
$_lang['orders_company_warehouse_create'] = 'Создать компанию на выгрузке на складе';
$_lang['orders_company_warehouse_remove'] = 'Удалить компанию на выгрузке на складе';
$_lang['orders_companies_warehouse_remove'] = 'Удалить компании на выгрузке на складе';
$_lang['orders_company_warehouse_remove_confirm'] = 'Вы уверены, что хотите удалить эту компанию на выгрузке на складе?';
$_lang['orders_companies_warehouse_remove_confirm'] = 'Вы уверены, что хотите удалить эти компании на выгрузке на складе?';
$_lang['orders_company_warehouse_update'] = 'Изменить данные о компании на выгрузке на складе';
$_lang['orders_company_warehouse_err_name'] = 'Вы должны указать название компании на выгрузке на складе';
$_lang['orders_company_warehouse_err_ae'] = 'Компания на выгрузке на складе с таким именем уже существует';
$_lang['orders_company_warehouse_err_nf'] = 'Компания на выгрузке на складе не найдена';
$_lang['orders_company_warehouse_err_ns'] = 'Компания на выгрузке на складе не указана';

$_lang['orders_client_title'] = 'Клиенты';
$_lang['orders_client_intro_msg'] = 'Вы можете выделять сразу несколько клиентов при помощи Shift или Ctrl.';
$_lang['orders_client_name'] = 'Название клиента';
$_lang['orders_clients_name'] = 'Клиенты';
$_lang['orders_client_sender_create'] = 'Добавить SHIPPER';
$_lang['orders_client_manager_create'] = 'Добавить Менеджера';
$_lang['orders_client_goods_create'] = 'Добавить Товар';
$_lang['orders_client_create'] = 'Создать клиента';
$_lang['orders_client_remove'] = 'Удалить клиента';
$_lang['orders_clients_remove'] = 'Удалить клиентов';
$_lang['orders_client_remove_confirm'] = 'Вы уверены, что хотите удалить этого клиента?';
$_lang['orders_clients_remove_confirm'] = 'Вы уверены, что хотите удалить этих клиентов?';
$_lang['orders_client_tab_update'] = 'Клиент';
$_lang['orders_client_update'] = 'Изменить клиента';
$_lang['orders_client_err_name'] = 'Вы должны указать название клиента';
$_lang['orders_client_err_ae'] = 'Клиент с таким именем уже существует';
$_lang['orders_client_err_nf'] = 'Клиент не найден';
$_lang['orders_client_err_ns'] = 'Клиент не указан';


$_lang['orders_receiver_title'] = 'CONSIGNEE';
$_lang['orders_receiver_intro_msg'] = 'Вы можете выделять сразу несколько CONSIGNEE при помощи Shift или Ctrl.';
$_lang['orders_receiver_name'] = 'Название CONSIGNEE';
$_lang['orders_receivers_name'] = 'CONSIGNEE';
$_lang['orders_receiver_create'] = 'Создать CONSIGNEE';
$_lang['orders_receiver_remove'] = 'Удалить CONSIGNEE';
$_lang['orders_receivers_remove'] = 'Удалить CONSIGNEE';
$_lang['orders_receiver_remove_confirm'] = 'Вы уверены, что хотите удалить этого CONSIGNEE?';
$_lang['orders_receivers_remove_confirm'] = 'Вы уверены, что хотите удалить этих CONSIGNEE?';
$_lang['orders_receiver_update'] = 'Изменить данные об CONSIGNEE';
$_lang['orders_receiver_err_name'] = 'Вы должны указать название CONSIGNEE';
$_lang['orders_receiver_err_ae'] = 'CONSIGNEE с таким именем уже существует';
$_lang['orders_receiver_err_nf'] = 'CONSIGNEE не найден';
$_lang['orders_receiver_err_ns'] = 'CONSIGNEE не указан';

$_lang['orders_sender_title'] = 'SHIPPER';
$_lang['orders_sender_intro_msg'] = 'Вы можете выделять сразу несколько SHIPPER при помощи Shift или Ctrl.';
$_lang['orders_sender_name'] = 'Название SHIPPER';
$_lang['orders_senders_name'] = 'SHIPPER';
$_lang['orders_sender_create'] = 'Создать SHIPPER';
$_lang['orders_sender_remove'] = 'Удалить SHIPPER';
$_lang['orders_senders_remove'] = 'Удалить SHIPPER';
$_lang['orders_sender_remove_confirm'] = 'Вы уверены, что хотите удалить этого SHIPPER?';
$_lang['orders_senders_remove_confirm'] = 'Вы уверены, что хотите удалить этих SHIPPER?';
$_lang['orders_sender_update'] = 'Изменить SHIPPER';
$_lang['orders_sender_err_name'] = 'Вы должны указать название SHIPPER';
$_lang['orders_sender_err_ae'] = 'SHIPPER с таким именем уже существует';
$_lang['orders_sender_client_err_ae'] = 'SHIPPER уже добавлен к клиенту';
$_lang['orders_sender_err_nf'] = 'SHIPPER не найден';
$_lang['orders_sender_err_ns'] = 'SHIPPER не указан';

$_lang['orders_forwarder_title'] = 'NOTIFY PARTY';
$_lang['orders_forwarder_title'] = 'NOTIFY PARTY';
$_lang['orders_forwarder_intro_msg'] = 'Вы можете выделять сразу несколько NOTIFY PARTY при помощи Shift или Ctrl.';
$_lang['orders_forwarder_name'] = 'Название NOTIFY PARTY';
$_lang['orders_forwarders_name'] = 'NOTIFY PARTY';
$_lang['orders_forwarder_create'] = 'Создать NOTIFY PARTY';
$_lang['orders_forwarder_remove'] = 'Удалить NOTIFY PARTY';
$_lang['orders_forwarders_remove'] = 'Удалить NOTIFY PARTY';
$_lang['orders_forwarder_remove_confirm'] = 'Вы уверены, что хотите удалить этого NOTIFY PARTY?';
$_lang['orders_forwarders_remove_confirm'] = 'Вы уверены, что хотите удалить этих NOTIFY PARTY?';
$_lang['orders_forwarder_update'] = 'Изменить данные об NOTIFY PARTY';
$_lang['orders_forwarder_err_name'] = 'Вы должны указать название NOTIFY PARTY';
$_lang['orders_forwarder_err_ae'] = 'NOTIFY PARTY с таким именем уже существует';
$_lang['orders_forwarder_err_nf'] = 'NOTIFY PARTY не найден';
$_lang['orders_forwarder_err_ns'] = 'NOTIFY PARTY не указан';

$_lang['orders_setting_create'] = 'Создать настройку';
$_lang['orders_setting_actions'] = 'Действия';
$_lang['orders_setting_title'] = 'Настройки';
$_lang['orders_setting_permissions_title'] = 'Права доступа';
$_lang['orders_setting_intro_msg'] = 'Вы можете выделять сразу несколько настроек при помощи Shift или Ctrl.';
$_lang['orders_setting_name_trans'] = 'Имя';
$_lang['orders_setting_name'] = 'Ключ';
$_lang['orders_setting_area'] = 'Раздел';
$_lang['orders_setting_value'] = 'Значение';
$_lang['orders_setting_update'] = 'Изменить настройку';
$_lang['orders_setting_err_nf'] = 'Настройка не найдена';
$_lang['orders_setting_err_ns'] = 'Настройка не указана';
$_lang['orders_setting_err_name'] = 'Вы должны указать ключ';
$_lang['orders_setting_err_ae'] = 'Ключ с таким именем уже существует';
$_lang['orders_setting_import_items'] = 'Обновить заказы';
$_lang['orders_setting_import_items_desc'] = 'Загрузите файл Excel в соответствии с принятой структурой и данные для вкладки Заказы обновятся.';
$_lang['orders_setting_import_items_file'] = 'Файл для загрузки';
$_lang['orders_setting_import_items_submit'] = 'Обновить данные';
$_lang['orders_setting_import_items_xls_not_loaded'] = 'Файл не выбран или файла не Excel';

$_lang['orders_setting_item_template'] = 'Шаблон для вывода колонок во вкладке Заказы';
$_lang['orders_setting_item_avtovyvoz1_fields_disabled'] = 'Поля недоступные для редактирования в таблице - пользователь Автовывоз 1';
$_lang['orders_setting_item_avtovyvoz1_fields_delete'] = 'Поля недоступные для вывода в таблице - пользователь Автовывоз 1';
$_lang['orders_setting_item_avtovyvoz2_fields_disabled'] = 'Поля недоступные для редактирования в таблице - пользователь Автовывоз 2';
$_lang['orders_setting_item_avtovyvoz2_fields_delete'] = 'Поля недоступные для вывода в таблице - пользователь Автовывоз 2';
$_lang['orders_setting_item_manager_fields_disabled'] = 'Поля недоступные для редактирования в таблице - пользователь Менеджер';
$_lang['orders_setting_item_manager_fields_delete'] = 'Поля недоступные для вывода в таблице - пользователь Менеджер';
$_lang['orders_setting_item_manager_line_fields_disabled'] = 'Поля недоступные для редактирования в таблице - пользователь LineManager';
$_lang['orders_setting_item_manager_line_fields_delete'] = 'Поля недоступные для вывода в таблице - пользователь LineManager';
$_lang['orders_setting_item_tamozhnya_fields_disabled'] = 'Поля недоступные для редактирования в таблице - пользователь Таможня';
$_lang['orders_setting_item_tamozhnya_fields_delete'] = 'Поля недоступные для вывода в таблице - пользователь Таможня';
$_lang['orders_setting_item_email'] = 'E-mail для отправки сообщений во вкладке Заказы';
$_lang['orders_setting_item_email_fields'] = 'Поля которые отправляются на email';

$_lang['orders_template_title'] = 'Шаблоны';
$_lang['orders_template_intro_msg'] = 'Вы можете выделять сразу несколько шаблонов при помощи Shift или Ctrl.';
$_lang['orders_template_name'] = 'Название шаблона';
$_lang['orders_templates_id'] = 'ID';
$_lang['orders_templates_value'] = 'Поля';
$_lang['orders_templates_name'] = 'Шаблоны';
$_lang['orders_template_create'] = 'Создать шаблон';
$_lang['orders_template_remove'] = 'Удалить шаблон';
$_lang['orders_templates_remove'] = 'Удалить шаблоны';
$_lang['orders_template_remove_confirm'] = 'Вы уверены, что хотите удалить этот шаблон?';
$_lang['orders_templates_remove_confirm'] = 'Вы уверены, что хотите удалить эти шаблоны?';
$_lang['orders_template_update'] = 'Изменить шаблон';
$_lang['orders_template_err_name'] = 'Вы должны указать название шаблона';
$_lang['orders_template_err_ae'] = 'Шаблон с таким именем уже существует';
$_lang['orders_template_err_nf'] = 'Шаблон не найден';
$_lang['orders_template_err_ns'] = 'Шаблон не указан';

$_lang['orders_settings_fields_width_title'] = 'Ширина полей';
$_lang['orders_settings_fields_width_intro_msg'] = 'Вы можете выделять сразу несколько полей при помощи Shift или Ctrl.';
$_lang['orders_settings_fields_width_name'] = 'Поле';
$_lang['orders_settings_fields_width_name_trans'] = 'Название поля';
$_lang['orders_settings_fields_width_value'] = 'Значение';
$_lang['orders_settings_fields_width_create'] = 'Создать поле';
$_lang['orders_settings_fields_width_remove'] = 'Удалить поле';
$_lang['orders_settings_fields_widths_remove'] = 'Удалить поля';
$_lang['orders_settings_fields_width_remove_confirm'] = 'Вы уверены, что хотите удалить это поле?';
$_lang['orders_settings_fields_widths_remove_confirm'] = 'Вы уверены, что хотите удалить эти поля?';
$_lang['orders_settings_fields_width_update'] = 'Изменить ширину поля';
$_lang['orders_settings_fields_width_err_name'] = 'Вы должны указать название поля';
$_lang['orders_settings_fields_width_err_ae'] = 'Поле с таким именем уже существует';
$_lang['orders_settings_fields_width_err_nf'] = 'Поле не найдено';
$_lang['orders_settings_fields_width_err_ns'] = 'Поле не указано';
