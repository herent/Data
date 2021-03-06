<?php

class DataTypeTest extends DataDatabaseTestCase {

	public function testAutoload() {
		$this->assertInstanceOf('DataType', new DataType);
	}

	public function testImportDataType() {
		$xml = new SimpleXMLElement('
			<DataType dtName="Test" dtHandle="test"/>
		');
		$DataType = new DataType;
		$dataType = $DataType->import($xml);
		$this->assertNotNull($dataType->dtID);
		$this->assertEquals('Test', $dataType->dtName);
		$this->assertEquals('test', $dataType->dtHandle);
	}

	public function testImportDataTypeWithDatas() {
		$xml = new SimpleXMLElement('
			<DataType dtName="Testing" dtHandle="testing">
				<Data/>
				<Data/>
				<Data/>
			</DataType>
		');
		$DataType = new DataType;
		$dataType = $DataType->import($xml);
		$this->assertEquals(3, count($dataType->datas));
	}

	public function testImportDataTypeIncorrectElementName() {
		$xml = new SimpleXMLElement('
			<Data dtName="Test" dtHandle="test"/>
		');
		$DataType = new DataType;
		$this->setExpectedException('DataTypeException');
		$DataType->import($xml);
	}
}
