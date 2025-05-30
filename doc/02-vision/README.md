Requires Java Runtime Environment.

```sh
java -jar '../01-common/01-tools/02-jing/20091111/jing.jar' '../01-common/01-tools/01-docbook/5.1/docbook.rng' vision.xml

java -cp ../01-common/01-tools/03-saxon/he-12.7/saxon-he-12.7.jar net.sf.saxon.Transform -s:vision.xml -xsl:../01-common/01-tools/01-docbook/5.1/xsltng/2.5.0/xslt/docbook.xsl -o:vision.html user-css-links=../01-common/02-templates/koinonia.css

java -cp ../01-common/01-tools/03-saxon/he-12.7/saxon-he-12.7.jar net.sf.saxon.Transform -s:vision.xml -xsl:../01-common/02-templates/koinonia.xsl -o:vision.html user-css-links=../01-common/02-templates/koinonia.css
```