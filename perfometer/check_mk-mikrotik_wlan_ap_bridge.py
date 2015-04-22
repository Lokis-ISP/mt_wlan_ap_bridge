def perfometer_mikrotik_wlan_ap_bridge(row, check_command, perf_data):
    ccq = saveint(perf_data[1][1])
    if ccq in range(90, 101):
        color = "#00ffff"
    elif ccq in range(80, 90):
        color = "#7fff00"
    elif ccq in range(70, 80):
        color = "#adff2f"
    elif ccq in range(60, 70):
        color = "#ffff00"
    elif ccq in range(50, 60):
        color = "#ffd700"
    else:
        color = "#ff7f50"
    h = '<table><tr>'
    perc_used = ccq
    perc_free = 100 - ccq
    h += perfometer_td(perc_used, color)
    h += perfometer_td(perc_free, "white")
    h += '</tr></table>'
    return "CCQ %d%%" % perc_used, h

perfometers['check_mk-mikrotik_wlan_ap_bridge'] = perfometer_mikrotik_wlan_ap_bridge
