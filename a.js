const options = {
    'CSE': {
        '1st': {
            subjects: ['1-CSE', '1-CSE', '1-CSE', '1-CSE', '1-CSE']
        },
        '2nd': {
            subjects: ['2-CSE', '2-CSE', '2-CSE', '2-CSE']
        },
        '3rd': {
            subjects: ['3-CSE', '3-CSE', '3-CSE', '3-CSE']
        },
        '4th': {
            subjects: ['4-CSE', '4-CSE', '4-CSE']
        },
        '5th': {
            subjects: ['5-CSE', '5-CSE', '5-CSE']
        },
        '6th': {
            subjects: ['6-CSE', '6-CSE', '6-CSE']
        },
        '7th': {
            subjects: ['7-CSE', '7-CSE', '7-CSE', '7-CSE', '7-CSE']
        },
        '8th': {
            subjects: ['8-CSE', '8-CSE', '8-CSE', '8-CSE']
        }
    },
    'MECH': {
        '1st': {
            subjects: ['1-MECH', '1-MECH', '1-MECH', '1-MECH', '1-MECH']
        },
        '2nd': {
            subjects: ['2-MECH', '2-MECH', '2-MECH', '2-MECH']
        },
        '3rd': {
            subjects: ['3-MECH', '3-MECH', '3-MECH', '3-MECH']
        },
        '4th': {
            subjects: ['4-MECH', '4-MECH', '4-MECH']
        },
        '5th': {
            subjects: ['5-MECH', '5-MECH', '5-MECH']
        },
        '6th': {
            subjects: ['6-MECH', '6-MECH', '6-MECH']
        },
        '7th': {
            subjects: ['7-MECH', '7-MECH', '7-MECH', '7-MECH', '7-MECH']
        },
        '8th': {
            subjects: ['8-MECH', '8-MECH', '8-MECH', '8-MECH']
        }
    },
    'ELECT': {
        '1st': {
            subjects: ['1-ELECT', '1-ELECT', '1-ELECT', '1-ELECT', '1-ELECT']
        },
        '2nd': {
            subjects: ['2-ELECT', '2-ELECT', '2-ELECT', '2-ELECT']
        },
        '3rd': {
            subjects: ['3-ELECT', '3-ELECT', '3-ELECT', '3-ELECT']
        },
        '4th': {
            subjects: ['4-ELECT', '4-ELECT', '4-ELECT']
        },
        '5th': {
            subjects: ['5-ELECT', '5-ELECT', '5-MECH']
        },
        '6th': {
            subjects: ['6-ELECT', '6-ELECT', '6-ELECT']
        },
        '7th': {
            subjects: ['7-ELECT', '7-ELECT', '7-ELECT', '7-ELECT', '7-ELECT']
        },
        '8th': {
            subjects: ['8-ELECT', '8-ELECT', '8-ELECT', '8-ELECT']
        }
    },
    'INSTR': {
        '1st': {
            subjects: ['1-INSTR', '1-INSTR', '1-INSTR', '1-INSTR', '1-INSTR']
        },
        '2nd': {
            subjects: ['2-INSTR', '2-INSTR', '2-INSTR', '2-INSTR']
        },
        '3rd': {
            subjects: ['3-INSTR', '3-INSTR', '3-INSTR', '3-INSTR']
        },
        '4th': {
            subjects: ['4-INSTR', '4-INSTR', '4-INSTR']
        },
        '5th': {
            subjects: ['5-INSTR', '5-INSTR', '5-INSTR']
        },
        '6th': {
            subjects: ['6-INSTR', '6-INSTR', '6-INSTR']
        },
        '7th': {
            subjects: ['7-INSTR', '7-INSTR', '7-INSTR', '7-INSTR', '7-INSTR']
        },
        '8th': {
            subjects: ['8-INSTR', '8-INSTR', '8-INSTR', '8-INSTR']
        }
    },
    'ENTC': {
        '1st': {
            subjects: ['1-ENTC', '1-ENTC', '1-ENTC', '1-ENTC', '1-ENTC']
        },
        '2nd': {
            subjects: ['2-ENTC', '2-ENTC', '2-ENTC', '2-ENTC']
        },
        '3rd': {
            subjects: ['3-ENTC', '3-ENTC', '3-ENTC', '3-ENTC']
        },
        '4th': {
            subjects: ['4-ENTC', '4-ENTC', '4-ENTC']
        },
        '5th': {
            subjects: ['5-ENTC', '5-ENTC', '5-ENTC']
        },
        '6th': {
            subjects: ['6-ENTC', '6-ENTC', '6-ENTC']
        },
        '7th': {
            subjects: ['7-ENTC', '7-ENTC', '7-ENTC', '7-ENTC', '7-ENTC']
        },
        '8th': {
            subjects: ['8-ENTC', '8-ENTC', '8-ENTC', '8-ENTC']
        }
    },
    'CIVIL': {
       '1st': {
            subjects: ['1-CIVIL', '1-CIVIL', '1-CIVIL', '1-CIVIL', '1-CIVIL']
        },
        '2nd': {
            subjects: ['2-CIVIL', '2-CIVIL', '2-CIVIL', '2-CIVIL']
        },
        '3rd': {
            subjects: ['3-CIVIL', '3-CIVIL', '3-CIVIL', '3-CIVIL']
        },
        '4th': {
            subjects: ['4-CIVIL', '4-CIVIL', '4-CIVIL']
        },
        '5th': {
            subjects: ['5-CIVIL', '5-CIVIL', '5-CIVIL']
        },
        '6th': {
            subjects: ['6-CIVIL', '6-CIVIL', '6-CIVIL']
        },
        '7th': {
            subjects: ['7-CIVIL', '7-CIVIL', '7-CIVIL', '7-CIVIL', '7-CIVIL']
        },
        '8th': {
            subjects: ['8-CIVIL', '8-CIVIL', '8-CIVIL', '8-CIVIL']
        }
    }
}

function changesubject() {
    subject.innerHTML = "";
    options[branch.value][sem.value].subjects.forEach(e => subject.innerHTML += `<option value=${e}">${e}</option"`)
}
branch.addEventListener('change', changesubject);
sem.addEventListener('change', changesubject);
changesubject();