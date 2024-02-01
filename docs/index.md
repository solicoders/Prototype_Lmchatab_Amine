---
layout : default
slug: /index
order : 1
---



{%- assign chapitres = site.pages | sort: "order"  -%}
 
{% for chapitre in chapitres %}
- [{{ chapitre.name }}]({{site.baseurl}}/{{ chapitre.url }})
{% endfor %}  
 




<!-- 
[creation-app](./creation-app.md)
[base-de-données](./base-de-données.md)
[jeux-test](./jeux-test.md)
[back-end](./back-end.md)
[unit-test](./unit-test.md)
[front-end](./front-end.md) -->