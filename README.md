### DocLister for MODX Evolution
[![CMS MODX Evolution](https://img.shields.io/badge/CMS-MODX%20Evolution-brightgreen.svg)](https://github.com/modxcms/evolution) [![Build Status](https://img.shields.io/travis/AgelxNash/DocLister/master.svg?maxAge=2592000)](https://travis-ci.org/AgelxNash/DocLister) [![Issues](https://img.shields.io/github/issues-closed-raw/AgelxNash/DocLister.svg?maxAge=2592000)](https://github.com/AgelxNash/DocLister/issues) [![Code quality](https://img.shields.io/scrutinizer/g/AgelxNash/DocLister.svg?maxAge=2592000)](https://scrutinizer-ci.com/g/AgelxNash/DocLister/) [![Documentation](https://img.shields.io/badge/Documentation-processed-orange.svg)](https://github.com/evolution-cms/docs/tree/master/03_Extras/04_Snippets/DocLister) [![License](https://img.shields.io/github/license/AgelxNash/DocLister.svg?maxAge=2592000)](https://github.com/AgelxNash/DocLister/blob/master/license.txt)

Класс для вывода информации из таблиц по предопределенным правилам.
Если нет правил, то данные отображаются без дополнительной обработки и связи. Т.е. все поля и значения совпадают с базой данных.

Правила для обработки информации описаны в контроллерах.
Главный контроллер - **site_content** который определяет связь основных документов site_content с данными в TV-параметрах

На базе класса DocLister сформировано 6 сниппетов:
* **DocLister** - основной сниппет для вывода информации по принципу сниппетов Ditto и CatalogView
* **DLcrumbs** - для формирования хлебных крошек по принципу сниппета Breadcrumbs
* **DLglossary** - для фильтрации документов по первому символу в определенном поле
* **DLvaluelist** - для замены сниппета DropDownDocs
* **DLTemplate** - для замены $modx->parseChunk()
* **DLFirstChar** - выборка документов и группировках в блоках по первой букве
* **DLPrevNext** - цикличная навигация вперед/назад между соседними документами
* **DLBuildMenu** - Построение меню не ограниченой вложенности
* **DLReflect** - Построение списка дат
* **DLReflectFilter** - Фильтрация документов по датам
* **DLBeforeAfter** - Пагинация по прошедшим и предстоящим событиями с учетом текущей даты

### Полезные ссылки
---------
* **Документация**: https://github.com/evolution-cms/docs/tree/master/03_Extras/04_Snippets/DocLister

### Автор
---------
<table>
  <tr>
    <td valign="center" align="center"><img src="http://www.gravatar.com/avatar/bf12d44182c98288015f65c9861903aa?s=180"></td>
	<td valign="top">
		<h4>Борисов Евгений
			<br />
			Agel Nash
		</h4>
		<a href="http://agel-nash.ru">http://agel-nash.ru</a><br />
		<br />
		<strong>ICQ</strong>: 8608196<br />
		<strong>Email</strong>: modx@agel-nash.ru
	</td>
	<td valign="top">
		<h4>Реквизиты для доната<br /><br /></h4>
		<br /><br />
		<strong>WMZ</strong>: Z762708026453<br />
		<strong>WMR</strong>: R203864025267<br />
	</td>
  </tr>
  <tr>
    <td valign="center" align="center"><img src="http://www.gravatar.com/avatar/b91e37b9ae5b4869b4508e8a5326200a?s=160"></td>
	<td valign="top">
		<h4>Максим
			<br />
			Pathologic
		</h4>
		<a href="https://github.com/Pathologic">@Pathologic</a><br />
		<br />
		<strong>Email</strong>: m@xim.name
	</td>
	<td valign="top">
		<h4>Реквизиты для доната<br /><br /></h4>
		<br /><br />
		<strong>ЯД</strong>: 410011458897796<br />
	</td>
  </tr>
</table>

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/AgelxNash/doclister/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

