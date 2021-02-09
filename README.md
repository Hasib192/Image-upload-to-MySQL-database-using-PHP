## Store and Retrieve Image from MySQL Database using PHP
This respository shows how to store &amp; retrieve image from MySQL database using PHP. **If you find it useful then leave a ★**

The first thing you need to do is create a database in you phpmyadmin called **"test"**. (Note: If you want to give another name to your database, then you will also need to change the database name in the db_config.php file.)

Then create a table in the database and, the format of the SQL query will be like below.
```
--
-- Table structure for table `images`
--
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  ```
  After creating a database, you need to create a folder called named **"upload"** where the PHP files are located. Because the images will be stored in the upload folder
