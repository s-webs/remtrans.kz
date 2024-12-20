var data = [
	["kz-5085", 120],
	["kz-qo", 1],
	["kz-ac", 2],
	["kz-as", 3],
	["kz-qs", 4],
	["kz-nk", 5],
	["kz-pa", 6],
	["kz-am", 7],
	["kz-zm", 8],
	["kz-ek", 9],
	["kz-ar", 10],
	["kz-mg", 11],
	["kz-aa", 12],
	["kz-at", 13],
	["kz-wk", 14],
	["kz-sk", 15],
	["kz-qg", 16],
]

// Create the chart
const mychart = Highcharts.mapChart("mapChart", {
	chart: {
		map: "countries/kz/kz-all",
		height: screen.width < 768 ? "100%" : "600px",
		responsive: true,
		backgroundColor: null,
		margin: [0, 10, 80, 0],
		events: {},
	},
	exporting: {
		enabled: false,
	},
	title: false,
	styledMode: true,
	tooltip: {
		enabled: false,
		followPointer: false,
		style: {
			fontFamily: "Open Sans",
		},
		formatter: function () {
			switch (this.point.name) {
				case "Павлодарская область":
					return (
						'<b>ТОР:</b><br><b>Павлодар</b><br><p>ТОО "Вагонный сервис"</p></b><br><b>Аксу-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p> <br><b>Екибастуз-ТОО</b><br><p>"Вагонный сервис"</p> <br><b>Ушкулын-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br></hr>' +
						"<b>           <hr>     </b><br>" +
						"<b>ДР И КР:</b><br><b>Филиал ТОО «Қамқор Вагон» Павлодарское вагоноремонтное депо</b><br><p>Павлодарская область, г. Павлодар, ст. Павлодар</p><br><b>ТОО «Богатырь Транс»</b><br><p>Павлодарская область, г. Екибастур, ст. Екибастуз</p>" +
						""
					)
				case "Актюбинская область":
					return (
						'<b>ТОР:</b><br><b>Кандыагаш </b><br><p>ТОО "Вагонный сервис"</p><br><b>Дон-филиал</b><br><p>ТОО"КТЖ-Грузовые перевозки"</p><br><b>Никельтау-филиал</b><br><p> ТОО "КТЖ-Грузовые перевозки"</p><br><b>Шалкар-филиал</b><br><p> ТОО  "КТЖ-Грузовые перевозки"</p><br>' +
						"<b>                </b><br>" +
						"<b>ДР И КР:</b><br><b>Филиал ТОО «Қамқор Вагон» - Шалкарское  вагоноремонтное депо</b><br><p>Актюбинская область, г. Шалкар, ст. Шалкар</p>" +
						""
					)
				case "Алматы":
					return (
						'<b>ТОР:</b><br><b>Алтынколь</b><br><p>ТОО "Вагонный Сервис"</p><br><b>Уштобе-филиал</b><br><p> ТОО "КТЖ-Грузовые перевозки"</p><br><b>Достык </b><br><p>ТОО "Вагонный Сервис"</p><br><b>Актогай  </b><br><p>ТОО "Вагонный Сервис</p><br>' +
						"<b>                </b><br>" +
						"<b>ДР И КР:</b><br><b>Филиал ТОО «Қамқор Вагон» - «ВКМ ст.Алматы-1»</b><br><p>Алматинская область, г. Алматы, ст. Алматы-1</p>"
					)
				case "Алматинская область":
					return (
						'<b>ТОР:</b><br><b>Алтынколь</b><br><p>ТОО "Вагонный Сервис"</p><br><b>Уштобе-филиал</b><br><p> ТОО "КТЖ-Грузовые перевозки"</p><br><b>Достык </b><br><p>ТОО "Вагонный Сервис"</p><br><b>Актогай  </b><br><p>ТОО "Вагонный Сервис</p><br>' +
						"<b>                </b><br>" +
						"<b>Филиал ТОО «Қамқор Вагон» - «ВКМ ст.Алматы-1»</b><br><p>Алматинская область, г. Алматы, ст. Алматы-1</p>"
					)
				case "ЮКО":
					return (
						'<b>ТОР:</b><br><b>Арысь</b><br><b>Арысь-филиал  </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Шымкент-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br>' +
						"<b>                </b><br>" +
						"<b>ДР И КР:</b><br><b>Филиал ТОО «Astana Railways Services» - Вагоноремонтное депо  Арысь</b><br><p>Туркестанская область, г. Арыс, ст. Арыс</p><br><b>ТОО «Шымкент Рем Сервис»</b><br><p>Туркестанская область, г. Шымкент, ст. Шымкент</p>"
					)
				case "Атырауская область":
					return '<b>ТОР:</b><br><b>Макат-филиал  </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Атырау-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Кульсары-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br>'
				case "Западно-Казахстанская область":
					return (
						'<b>ТОР:</b><br><b>Уральск</b><br><b>Уральск-филиал  </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br>' +
						"<b>                </b><br>" +
						"<b>ДР И КР:</b><br><b>Филиал ТОО «Astana Railways Services» - Вагоноремонтное депо Уральск</b><br><p>Западно-Казахстанская область, г. Уральск, ст. Уральск</p>"
					)
				case "Восточно-Казахстанская область":
					return (
						'<b>ТОР:</b><br><b>Семей</b><br><b>Жана-Семей-филиал </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Семей-филиал </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Аягоз-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>ВКО</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br>' +
						"<b>                </b><br>" +
						"<b>ДР И КР:</b><br><b>Филиал ТОО «Қамқор Вагон» - Усть-Каменогорское  вагоноремонтное депо</b><br><p>Восточно-Казахстанская область, г. Оскемен, ст. Оскемен</p><br><b>Филиал ТОО «Қамқор Вагон» - Аякозское  вагоноремонтное депо</b><br><p>Восточно-Казахстанская область, г. Аягоз, ст. Аягоз</p><br><b>ПК «Ибраев+К»</b><br><p>Восточно-Казахстанская область, г. Семей, ст. Семей</p>"
					)
				case "Акмолинская обл.":
					return (
						'<b>ТОР:</b><br><b>Акмолинская область</b><br><b>Атбасар-филиал </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Кокшетау-филиал </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Курорт-Боровое-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Новоишимская-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><br><b>Нур-Султан</b><br><p>ТОО "Вагонный сервис"</p><br>' +
						"<b>                </b><br>" +
						"<b>ДР И КР:</b><br><b>ТОО «Вагоноремонтное депо Бурабай»</b><br><p>Акмолинская область, г. Щучинск, ст. Курорт Боровое</p><br><b>ТОО «Аждар и К»</b><br><p>Акмолинская область, г. Атбасар, ст. Атбасар</p><br><b>АО «Акмолинский вагоноремонтный завод»</b><br><p>г. Нур-Султан, ст. Нур-Султан</p>"
					)
				case "Нур-Султан":
					return (
						'<b>ТОР:</b><br><b>Акмолинская область</b><br><b>Атбасар-филиал </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Кокшетау-филиал </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Курорт-Боровое-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Новоишимская-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><br><b>Нур-Султан</b><br><p>ТОО "Вагонный сервис"</p><br>' +
						"<b>                </b><br>" +
						"<b>ДР И КР:</b><br><b>ТОО «Вагоноремонтное депо Бурабай»</b><br><p>Акмолинская область, г. Щучинск, ст. Курорт Боровое</p><br><b>ТОО «Аждар и К»</b><br><p>Акмолинская область, г. Атбасар, ст. Атбасар</p><br><b>АО «Акмолинский вагоноремонтный завод»</b><br><p>г. Нур-Султан, ст. Нур-Султан</p>"
					)
				case "Карагандинская область":
					return (
						'<b>ТОР:</b><br><b>Караганда Сорт </b><br><p>ТОО "Вагонный сервис"</p><br><b>Карабас </b><br><p>ТОО "Вагонный сервис"</p><br><b>Жанааул-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Агадырь-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Мойынты-филиал </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Балхаш-филиал </b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br>' +
						"<b>                </b><br>" +
						"<b>ДР И КР:</b><br><b>Филиал ТОО «Қамқор Вагон» - Карагандинкое  вагоноремонтное депо</b><br><p>Карагандинская область, г. Караганда, ст. Караганда-Сортировочная</p><br><b>Филиал ТОО «Astana Railways Services» - Вагоноремонтное депо Балхаш</b><br><p>Карагандинская область, г. Балхаш ст. Балхаш</p>"
					)
				case "Мангистауская область":
					return '<b>ТОР:</b><br><b>Бейнеу-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Мангистау-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br>'
				case "Костанайская область":
					return (
						'<b>ТОР:</b><br><b>Костанай-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Железорудная-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Тобол</b><br><p>ТОО "Вагонный сервис"</p><br><b>Есиль </b><br><p>ТОО "Вагонный сервис"</p><br><b>Кушмурун-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Арка-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br><b>Майлин-филиал</b><br><p>ТОО "КТЖ-Грузовые перевозки"</p><br>' +
						"<b>                </b><br>" +
						"<b>ДР И КР:</b><br><b>Филиал ТОО «Astana Railways Services» - Вагоноремонтное депо Кушмурун</b><br><p>Костанайская область, пос. Кушмурун, ст. Кушмурун</p>"
					)
				case "Северо-Казахстанская область":
					return "<b>ДР И КР:</b><br><b>АО ЗИКСТО</b><br><p>Северо-Казахстанская область, г. Петропавловск, ст. Петропавловск</p>"
				case "Кызылординская область":
					return "<b>ДР И КР:</b><br><b>Филиал ТОО «Қамқор Вагон» - Казалинское вагоноремонтное депо</b><br><p>Кызылординская область, г. Казалы, ст. Казалы</p>"
				case "Жамбылская область":
					return "<b>ДР И КР:</b><br><b>ТОО «Жамбыл Рем Сервис»</b><br><p>Жамбылская область, г. Тараз, ст. Тараз</p>"

				default:
					return this.point.name
			}
		},
	},

	plotOptions: {
		map: {
			point: {
				events: {
					mouseOver: function (e) {
						setSideBarContent(e.target.name)
					},
					click: function (e) {
						setSideBarContent(e.target.name)
					},
				},
			},
		},
		series: {
			point: {
				events: {
					mouseOver: function (e) {
						let cities = {
							1: "Кызылорда",
							2: "Алматы",
							4: "Костанай",
							5: "Северный Казахстан",
							6: "Павлодар",
							7: "Нурсултан",
							8: "Жамбыл",
							9: "Восточный Казахстан",
							10: "Атырау",
							11: "Мангистау",
							12: "Алматы",
							13: "Актобе",
							14: "Западный Казахстан",
							15: "Южный Казахстан",
							16: "Караганда",
						}
					},
				},
			},
			events: {},
		},
	},

	mapNavigation: {
		enabled: false,
		buttonOptions: {
			verticalAlign: "bottom",
		},
	},

	series: [
		{
			data: data,
			keys: ["hc-key", "value", "color"],
			color: "#FFFFFF",
			name: "",
			states: {
				hover: {
					color: "#4ba6c8",
				},
			},
			events: {},

			tooltip: {
				distance: 30,
			},

			dataLabels: {
				enabled: true,
				format: "{point.name}",
				shadow: false,
				style: {
					// stroke:"None",

					strokeOpacity: 0,
					fill: "red",
					fontFamily: "Montserrat",
					fontSize: screen.width > 768 ? "10px" : "6px",
					textShadow: "none",
					fontWeight: 700,
				},
			},
		},
	],
})

function setSideBarContent(name) {
	const wrapper = document.querySelector(".point-wrapper")
	const $TORsidebar = document.querySelector(".tor-sidebar")
	const $KRsidebar = document.querySelector(".kr-sidebar")

	function clear() {
		wrapper.style.justifyContent = ""
		if (!$TORsidebar.innerHTML) {
			$TORsidebar.style.display = "none"
		} else $TORsidebar.style.display = "block"

		if (!$KRsidebar.innerHTML) {
			$KRsidebar.style.display = "none"
			wrapper.style.justifyContent = "flex-end"
		} else $KRsidebar.style.display = "block"
	}

	switch (name) {
		case "Павлодарская область":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Павлодар</b><p>ТОО "Вагонный сервис"</p></b><b>Аксу-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p> <b>Екибастуз-ТОО</b><p>"Вагонный сервис"</p> <b>Ушкулын-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p>'

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>Филиал ТОО «Қамқор Вагон» Павлодарское вагоноремонтное депо</b><p>Павлодарская область, г. Павлодар, ст. Павлодар</p><b>ТОО «Богатырь Транс»</b><p>Павлодарская область, г. Екибастур, ст. Екибастуз</p>"
			clear()
			break

		case "Актюбинская область":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Кандыагаш </b><p>ТОО "Вагонный сервис"</p><b>Дон-филиал</b><p>ТОО"КТЖ-Грузовые перевозки"</p><b>Никельтау-филиал</b><p> ТОО "КТЖ-Грузовые перевозки"</p><b>Шалкар-филиал</b><p> ТОО  "КТЖ-Грузовые перевозки"</p>'

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>Филиал ТОО «Қамқор Вагон» - Шалкарское  вагоноремонтное депо</b><p>Актюбинская область, г. Шалкар, ст. Шалкар</p>"
			clear()
			break

		case "Алматы":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Алтынколь</b><p>ТОО "Вагонный Сервис"</p><b>Уштобе-филиал</b><p> ТОО "КТЖ-Грузовые перевозки"</p><b>Достык </b><p>ТОО "Вагонный Сервис"</p><b>Актогай  </b><p>ТОО "Вагонный Сервис</p>'

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>Филиал ТОО «Қамқор Вагон» - «ВКМ ст.Алматы-1»</b><p>Алматинская область, г. Алматы, ст. Алматы-1</p>"
			clear()
			break

		case "Алматинская область":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Алтынколь</b><p>ТОО "Вагонный Сервис"</p><b>Уштобе-филиал</b><p> ТОО "КТЖ-Грузовые перевозки"</p><b>Достык </b><p>ТОО "Вагонный Сервис"</p><b>Актогай  </b><p>ТОО "Вагонный Сервис</p>'

			$KRsidebar.innerHTML =
				"<b>Филиал ТОО «Қамқор Вагон» - «ВКМ ст.Алматы-1»</b><p>Алматинская область, г. Алматы, ст. Алматы-1</p>"
			clear()
			break

		case "ЮКО":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Арысь-филиал  </b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Шымкент-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p>'

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>Филиал ТОО «Astana Railways Services» - Вагоноремонтное депо  Арысь</b><p>Туркестанская область, г. Арыс, ст. Арыс</p><b>ТОО «Шымкент Рем Сервис»</b><p>Туркестанская область, г. Шымкент, ст. Шымкент</p>"
			clear()
			break

		case "Атырауская область":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Макат-филиал  </b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Атырау-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Кульсары-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p>'

			$KRsidebar.innerHTML = null
			clear()
			break

		case "Западно-Казахстанская область":
			$TORsidebar.innerHTML =
				"<p class='item-head'><b>ТОР:</b></p><b>Уральск</b></br><b>Уральск-филиал  </b><p>ТОО \"КТЖ-Грузовые перевозки\"</p>"

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>Филиал ТОО «Astana Railways Services» - Вагоноремонтное депо Уральск</b><p>Западно-Казахстанская область, г. Уральск, ст. Уральск</p>"
			clear()
			break

		case "Восточно-Казахстанская область":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Семей-филиал </b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Аягоз-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Оскемен-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p>'

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>Филиал ТОО «Қамқор Вагон» - Усть-Каменогорское  вагоноремонтное депо</b><p>Восточно-Казахстанская область, г. Оскемен, ст. Оскемен</p><b>Филиал ТОО «Қамқор Вагон» - Аякозское  вагоноремонтное депо</b><p>Восточно-Казахстанская область, г. Аягоз, ст. Аягоз</p><b>ПК «Ибраев+К»</b><p>Восточно-Казахстанская область, г. Семей, ст. Семей</p>"
			clear()
			break

		case "Акмолинская обл.":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Акмолинская область</b></br><b>Атбасар-филиал </b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Кокшетау-филиал </b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Курорт-Боровое-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Новоишимская-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Нур-Султан</b><p>ТОО "Вагонный сервис"</p>'

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>ТОО «Вагоноремонтное депо Бурабай»</b><p>Акмолинская область, г. Щучинск, ст. Курорт Боровое</p><b>ТОО «Аждар и К»</b><p>Акмолинская область, г. Атбасар, ст. Атбасар</p><b>АО «Акмолинский вагоноремонтный завод»</b><p>г. Нур-Султан, ст. Нур-Султан</p>"
			clear()
			break

		case "Нур-Султан":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Акмолинская область</b><b>Атбасар-филиал </b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Кокшетау-филиал </b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Курорт-Боровое-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Новоишимская-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Нур-Султан</b><p>ТОО "Вагонный сервис"</p>'

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>ТОО «Вагоноремонтное депо Бурабай»</b><p>Акмолинская область, г. Щучинск, ст. Курорт Боровое</p><b>ТОО «Аждар и К»</b><p>Акмолинская область, г. Атбасар, ст. Атбасар</p><b>АО «Акмолинский вагоноремонтный завод»</b><p>г. Нур-Султан, ст. Нур-Султан</p>"
			clear()
			break

		case "Карагандинская область":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Караганда Сорт </b><p>ТОО "Вагонный сервис"</p><b>Карабас </b><p>ТОО "Вагонный сервис"</p><b>Жанааул-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Агадырь-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Мойынты-филиал </b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Балхаш-филиал </b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Кызылжар-филиал</b><p>ТОО “КТЖ-Грузовые перевозки”</p>'

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>Филиал ТОО «Қамқор Вагон» - Карагандинкое  вагоноремонтное депо</b><p>Карагандинская область, г. Караганда, ст. Караганда-Сортировочная</p><b>Филиал ТОО «Astana Railways Services» - Вагоноремонтное депо Балхаш</b><p>Карагандинская область, г. Балхаш ст. Балхаш</p>"
			clear()
			break

		case "Мангистауская область":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Бейнеу-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Мангистау-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p>'

			$KRsidebar.innerHTML = null
			clear()
			break

		case "Костанайская область":
			$TORsidebar.innerHTML =
				'<p class=\'item-head\'><b>ТОР:</b></p><b>Костанай-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Железорудная-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Тобол</b><p>ТОО "Вагонный сервис"</p><b>Есиль </b><p>ТОО "Вагонный сервис"</p><b>Кушмурун-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Аркалык-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p><b>Майлин-филиал</b><p>ТОО "КТЖ-Грузовые перевозки"</p>'

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>Филиал ТОО «Astana Railways Services» - Вагоноремонтное депо Кушмурун</b><p>Костанайская область, пос. Кушмурун, ст. Кушмурун</p>"
			clear()
			break

		case "Северо-Казахстанская область":
			$TORsidebar.innerHTML =
				"<p class='item-head'><b>ТОР:</b></p><b>ВЧДР Петропавловск-филиал</b><p>ОАО “РЖД”</p>"

			$KRsidebar.innerHTML = null

			setTimeout(() => {
				clear()
			}, 20)
			break

		case "Кызылординская область":
			$TORsidebar.innerHTML =
				"<p class='item-head'><b>ТОР:</b></p><b>Казалы-филиал</b><p>ТОО “КТЖ-Грузовые перевозки”</p><b>Кызылорда-филиал</b><p>ТОО “КТЖ-Грузовые перевозки”</p><b>Сексаул-филиал</b><p>ТОО “КТЖ-Грузовые перевозки”</p>"

			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>Филиал ТОО «Қамқор Вагон» - Казалинское вагоноремонтное депо</b><p>Кызылординская область, г. Казалы, ст. Казалы</p>"
			clear()
			break

		case "Жамбылская область":
			$TORsidebar.innerHTML =
				"<p class='item-head'><b>ТОР:</b></p><b>Тараз-филиал</b><p>ТОО “КТЖ-Грузовые перевозки”</p><b>Шу-филиал</b><p>ТОО “КТЖ-Грузовые перевозки”</p>"
			$KRsidebar.innerHTML =
				"<p class='item-head'><b >ДР И КР:</b></p><b>ТОО «Жамбыл Рем Сервис»</b><p>Жамбылская область, г. Тараз, ст. Тараз</p>"
			clear()
			break

		default:
			console.log("Точка не найдена")
			clear()
	}
}

$(".highcharts-credits").css({ display: "none" })
;(function clear() {
	const $TORsidebar = document.querySelector(".tor-sidebar")
	const $KRsidebar = document.querySelector(".kr-sidebar")

	if (
		$TORsidebar.innerHTML === null ||
		$TORsidebar.innerHTML === "" ||
		$TORsidebar.innerHTML === undefined
	) {
		console.log($TORsidebar.innerHTML)
		$TORsidebar.style.display = "none"
	} else $TORsidebar.style.display = "block"

	if (
		$KRsidebar.innerHTML === null ||
		$TORsidebar.innerHTML === "" ||
		$TORsidebar.innerHTML === undefined
	) {
		console.log($KRsidebar.innerHTML)
		$KRsidebar.style.display = "none"
	} else $KRsidebar.style.display = "block"

	console.log($KRsidebar.style.display)
})()
