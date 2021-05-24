
# EE-19 5月24日 随堂练习

已知使用以下SQL语句创建了数据库表`employees`.

```sql
CREATE TABLE `employees` (
  `emp_no` int NOT NULL,
  `birth_date` date NOT NULL,
  `age` int NOT NULL,
  `name` varchar(14) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `hire_date` date NOT NULL,
  PRIMARY KEY (`emp_no`)
);
```

问题一：用表格或其他方式描述以上语句创建的表结构。

问题二：使用 `INSERT`语句在`employees`表中插入以下数据：

```text
emp_no : A001
birth_date : 2000年1月1日
age : 21
name : 张三
gender : 男
hire_date : 2021月1月1日
```

问题三：使用 `UPDATE`语句更新`employees`表中的`age`即年龄字段都增加一岁

问题四：使用 `SELECT`语句查询`employees`表中年龄在18至30岁之间的员工信息

问题五：使用 `DELETE`语句删除`employees`表中未满18岁（不含）的员工信息

问题六：现在创建一个员工薪资表 `employee_salary`， 员工薪资表记录每个员工每个月发放的薪资金额（月薪），要求包括以下字段：员工编号 `emp_no`, 发放日期 `salay_date`, 发放金额 `salary`， 请给出创建表的`CREATE`语句，并结合对业务的理解创建合适的主码和索引。

问题七：计算员工薪资表中最低、最高、平均的月薪金额。

问题八：查询2021年1月所有员工的薪资表，包括：员工编号、员工姓名、薪资，并按薪资降序排序。（假设每个员工每个月都会领薪水）。

问题九：计算每个员工领取的薪资总和，给出以下数据：员工编号、员工姓名、总薪资。