- 体验地址：https://dedewp.com/tools/paste/index.php
- 自动删除过期记录
```
create event myevent on SCHEDULE every 5 second do delete from yanshi.paste_tab where posttime<(CURRENT_TIMESTAMP() + INTERVAL -15 MINUTE);#删除15分钟的数据

SET GLOBAL event_scheduler = ON;

show variables like '%sc%';