import xlrd
import os


def converExcelToCsv():
    for fileName in os.listdir("./"):
        if "xlsx" not in fileName:
            continue

        wb = xlrd.open_workbook(fileName)
        for sheetName in wb.sheet_names():
            sh = wb.sheet_by_name(sheetName)

            csvName = fileName.replace("xlsx", "csv")
            csv = open(csvName, 'a')
            for rownum in range(sh.nrows):
                if len(sh.row_values(rownum)) == 0 or sh.row_values(rownum)[0] == '':
                    continue
                csv.write(",".join(list(map(str, sh.row_values(rownum)))) + '\n')

            csv.close()


converExcelToCsv()
